<?php

namespace App\Controllers;
helper('form');

class Home extends BaseController
{
    public function index($message = null)
    {
        $model = model(DonorsModel::class);
        $data['supporters'] = $model->orderBy('created_at', 'desc')->findAll();
        $data['message'] =  $message;
        $data['alarms'] = $this->getAlarm();
        return view('welcome_message', $data);
    }

    /**
     * Search Blood Donors
     */
    public function search()
    {
        if($this->request->is('get'))
        {
            if (!$this->validateData($this->request->getGet(['search']), [
                'search' => 'required|max_length[255]|min_length[3]',
            ])) {
                // The validation fails, so returns empty.
                return redirect()->route('/');
            }
            else
            {
                $model = model(DonorsModel::class);
                $data['donors'] = $model->where('id', $this->request->getGet(['search']))
                                        ->orWhere('mobile', $this->request->getGet(['search']))
                                        ->orWhere('email', $this->request->getGet(['search']))
                                        ->orWhere('district', $this->request->getGet(['search']))
                                        ->orWhere('blood_group', $this->request->getGet(['search']))
                                        ->orderBy('created_at', 'desc')
                                        ->findAll();
                $data['alarms'] = $this->getAlarm();
                return view('welcome_message', $data);
            }

        }
    }

    /**
     * Registration of new blood donors
     */
    public function register()
    {
        if($this->request->is('post'))
        {
            $post = $this->request->getPost(['nam', 'mob', 'email', 'district', 'blood_group', 'address']);
            // Checks whether the submitted data passed the validation rules.
            if (! $this->validateData($post, [
                'nam' => 'required|max_length[45]|min_length[10]',
                'mob'  => 'required|max_length[11]|min_length[10]',
                'email' => 'required|max_length[45]|min_length[10]',
                'district'  => 'required|max_length[18]|min_length[2]',
                'blood_group' => 'required|max_length[3]|min_length[2]',
                'address'  => 'max_length[100]',
            ])) {
                // The validation fails, so returns the form.
                return redirect()->route('/');
            }
            else
            {
                $model = model(DonorsModel::class);

                $model->save([
                    'name' => $post['nam'],
                    'mobile' => $post['mob'],
                    'email' => $post['email'],
                    'district' => $post['district'],
                    'blood_group' => $post['blood_group'],
                    'address' => $post['address'],
                ]);

                //Registration Success
                return redirect()->route('/');
            }
        }
        else
        {
            // form method isn't post
            return redirect()->route('/');
        }
    }

    private function getAlarm()
    {
        $model = model(AlarmsModel::class);
        return $model->orderBy('created_at', 'desc')->findAll(5);
    }

    /**
     * Set alarm/distress signal to users
     */
    public function alarm()
    {
        if($this->request->is('post'))
        {
            $post = $this->request->getPost(['nam2', 'mob2', 'district2', 'blood_group2', 'address2', 'reason2']);
            // Checks whether the submitted data passed the validation rules.
            if (! $this->validateData($post, [
                'nam2' => 'required|max_length[45]|min_length[10]',
                'mob2'  => 'required|max_length[11]|min_length[10]',
                'district2'  => 'required|max_length[18]|min_length[2]',
                'blood_group2' => 'required|max_length[3]|min_length[2]',
                'address2'  => 'max_length[300]',
                'reason2'  => 'max_length[100]',
            ])) {
                // The validation fails, so returns the form.
                return redirect()->route('/');
            }
            else
            {
                $model = model(AlarmsModel::class);

                $model->save([
                    'name' => $post['nam2'],
                    'mobile' => $post['mob2'],
                    'district' => $post['district2'],
                    'blood_group' => $post['blood_group2'],
                    'address' => $post['address2'],
                    'reason' => $post['reason2'],
                ]);

                $this->notifyDonors($post);

                //Alarm Creation Success
                return redirect()->route('/')->with('message', 'এলার্ম তৈরি সফল হয়েছে। নিকটবর্তী রক্তদাতাদের জরুরী অবহিত করা হচ্ছে।');
            }
        }
        else
        {
            // form method isn't post
            return redirect()->route('/');
        }
    }

    private function notifyDonors($data)
    {
        $email = \Config\Services::email();
        $model = model(DonorsModel::class);
        $result['donors'] = $model->where('district', $data['district2'])
                                ->orWhere('blood_group', $data['blood_group2'])
                                ->findAll();

        $template = 'জরুরী রক্ত প্রয়োজন। রক্তের গ্রুপঃ '.$data['blood_group2'].', জেলাঃ '.$data['district2'].', নামঃ '.$data['nam2'].', মোবাঃ '.$data['mob2'].', ঠিকানাঃ '.$data['address2'].', উদ্দেশ্যঃ '.$data['reason2'];
        foreach($result['donors'] as $donor)
        {
            $email->clear();
            $email->setFrom('admin@blood_warrior.com', 'Admin');
            $email->setTo($donor['email']);
            $email->setSubject('জরুরী রক্ত প্রয়োজন।');
            $email->setMessage($template);
            $email->send();
        }
        // send message to mobile
        // send push notification to browser and app.
    }
}
