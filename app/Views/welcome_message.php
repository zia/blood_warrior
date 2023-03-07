<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Warrior</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/fav.ico">

    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <style {csp-style-nonce}>
        .custom-footer {
            position: fixed;
            /* color: white; */
            height: 30px;
            bottom: 0;
            /* left: 0; */
            width: 100%;
            /* background-color: #FF0000; */
        }
    </style>
</head>
<body style="background-color:#e9f6fc;">
    <br>
    <div class="container-fluid">
        <!-- Heading -->
        <div class="row">
            <div class="col-sm-10">
                <h1 class="display-1 text-danger">
                    <img src="/blood-drop-icon.png" style="width:80px;height:80px;" class="img-fluid" alt="">
                    <b style="text-shadow: 2px 2px #FF0000;">Blood Warrior</b>
                    <kbd style="font-size: 16px;" class="text-white">রক্ত দিন জীবন বাঁচান</kbd>
                </h1>
            </div>
            <div class="col-sm-2">
                <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#regModal">রক্তযোদ্ধা?<br>সাইন আপ করুন।</button>
            </div>
        </div>

        <br>
        <!-- Search -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Find Blood Donors by District, Phone, Email or Blood Group.">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-1"></div>
        </div>


        <!-- Result -->
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="table-responsive">
                <!-- <caption>Search result..</caption> -->
                    <table class="table table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th class="text-center">ক্রম</th>
                                <th class="text-center">নাম</th>
                                <th class="text-center">মোবাইল</th>
                                <th class="text-center">ইমেইল</th>
                                <th class="text-center">জেলা</th>
                                <th class="text-center">রক্তের গ্রুপ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Anna</td>
                                <td class="text-center">Pitt</td>
                                <td class="text-center">35</td>
                                <td class="text-center">New York</td>
                                <td class="text-center">USA</td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Anna</td>
                                <td class="text-center">Pitt</td>
                                <td class="text-center">35</td>
                                <td class="text-center">New York</td>
                                <td class="text-center">USA</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end">
                    <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#alarmModal">জরুরী রক্ত প্রয়োজন?<br>একটি এলার্ম তৈরি করুন</button>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <!-- Footer -->
        <div class="row custom-footer">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 bg-info text-center">
                <a href="https://github.com/rubina2000" target="_blank" class="text-white">&copy; <?= date('Y') ?>; Khadija Akter Rubina</a>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <!-- Registration Modal-->
        <div class="modal" id="regModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-success">রক্তদাতা হিসেবে রেজিস্ট্রেশন করুন</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- Registration form -->
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label for="nam" class="text-danger">নাম:</label>
                                <input type="text" class="form-control" id="nam" placeholder="আপনার পূর্ণনাম লিখুন (আবশ্যক)" name="nam" required>
                            </div>
                            <div class="mb-3">
                                <label for="mob" class="text-danger">মোবাইল নাম্বার:</label>
                                <input type="text" class="form-control" id="mob" placeholder="যেমনঃ ০১৭XXXXXXXX (আবশ্যক)" name="mob" required>
                            </div>

                            <div class="mb-3">
                                <label for="email">ইমেইল:</label>
                                <input type="email" class="form-control" id="email" placeholder="যেমনঃ name@mail.com" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="district" class="form-label text-danger">নিজ জেলা: (যেকোন একটি নির্বাচন করুন):</label>
                                <select class="form-select" id="district" name="district" required>
                                    <option selected disabled value="">নির্বাচন করুন (আবশ্যক)</option>
                                    <option>গাজীপুর</option>
                                    <option>গোপালগঞ্জ</option>
                                    <option>টাঙ্গাইল</option>
                                    <option>ঢাকা</option>
                                    <option>নরসিংদী</option>
                                    <option>নারায়ণগঞ্জ</option>
                                    <option>ফরিদপুর</option>
                                    <option>মাদারীপুর</option>
                                    <option>মানিকগঞ্জ</option>
                                    <option>মুন্সিগঞ্জ</option>
                                    <option>রাজবাড়ী</option>
                                    <option>শরিয়তপুর</option>
                                    <option>কিশোরগঞ্জ</option>
                                    <option>কুমিল্লা</option>
                                    <option>ব্রাক্ষনবাড়িয়া</option>
                                    <option>চাঁদপুর</option>
                                    <option>নোয়াখালী</option>
                                    <option>লক্ষীপুর</option>
                                    <option>ফেনী</option>
                                    <option>খাগড়াছড়ি</option>
                                    <option>রাঙ্গামাটি</option>
                                    <option>বান্দরবন</option>
                                    <option>চট্টগ্রাম</option>
                                    <option>কক্সবাজার</option>
                                    <option>চাঁপাইনবাবগঞ্জ</option>
                                    <option>জয়পুরহাট</option>
                                    <option>নওগাঁ</option>
                                    <option>নাটোর</option>
                                    <option>পাবনা</option>
                                    <option>বগুড়া</option>
                                    <option>রাজশাহী</option>
                                    <option>সিরাজগঞ্জ</option>
                                    <option>খুলনা</option>
                                    <option>চুয়াডাঙ্গা</option>
                                    <option>ঝিনাইদহ</option>
                                    <option>নড়াইল</option>
                                    <option>বাগেরহাট</option>
                                    <option>সাতক্ষীরা</option>
                                    <option>কুষ্টিয়া</option>
                                    <option>মাগুরা</option>
                                    <option>মেহেরপুর</option>
                                    <option>যশোর</option>
                                    <option>বরিশাল</option>
                                    <option>পটুয়াখালী</option>
                                    <option>ভোলা</option>
                                    <option>পিরোজপুর</option>
                                    <option>বরগুনা</option>
                                    <option>ঝালকাঠি</option>
                                    <option>সিলেট</option>
                                    <option>মৌলভীবাজার</option>
                                    <option>হবিগঞ্জ</option>
                                    <option>সুনামগঞ্জ</option>
                                    <option>কুড়িগ্রাম</option>
                                    <option>গাইবান্ধা</option>
                                    <option>ঠাকুরগাঁও</option>
                                    <option>দিনাজপুর</option>
                                    <option>নীলফামারী</option>
                                    <option>পঞ্চগড়</option>
                                    <option>রংপুর</option>
                                    <option>লালমনিরহাট</option>
                                    <option>ময়মংসিংহ</option>
                                    <option>জামালপুর</option>
                                    <option>নেত্রকোণা</option>
                                    <option>শেরপুর</option>
                                </select>
                                <!-- <div class="invalid-feedback">
                                    Please select a valid state.
                                </div> -->
                            </div>

                            <div class="mb-3">
                                <label for="blood_group" class="form-label text-danger">রক্তের গ্রুপ: (যেকোন একটি নির্বাচন করুন):</label>
                                <select class="form-select" id="blood_group" name="blood_group" required>
                                    <option selected disabled value="">নির্বাচন করুন (আবশ্যক)</option>
                                    <option>A+(এ পজেটিভ)</option>
                                    <option>A-(এ নেগেটিভ)</option>
                                    <option>B+(বি পজেটিভ)</option>
                                    <option>B-(বি নেগেটিভ)</option>
                                    <option>O+(ও পজেটিভ)</option>
                                    <option>O-(ও নেগেটিভ)</option>
                                    <option>AB+(এবি পজেটিভ)</option>
                                    <option>AB-(এবি নেগেটিভ)</option>
                                    <option>Others(অন্যান্য)</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address">বর্তমান ঠিকানা:</label>
                                <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-success">রেজিস্ট্রেশন সম্পন্ন করুন</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">বন্ধ করুন</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alarm Modal-->
        <div class="modal" id="alarmModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-danger">জরুরী রক্ত প্রয়োজনে অবহিত করুন</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <!-- Alarm form -->
                        <form action="">
                            <div class="mb-3 mt-3">
                                <label for="nam">নাম:</label>
                                <input type="text" class="form-control" id="nam2" placeholder="আপনার পূর্ণনাম লিখুন" name="nam2">
                            </div>
                            <div class="mb-3">
                                <label for="mob" class="text-danger">মোবাইল নাম্বার:</label>
                                <input type="text" class="form-control" id="mob2" placeholder="যেমনঃ ০১৭XXXXXXXX (আবশ্যক)" name="mob2" required>
                            </div>

                            <div class="mb-3">
                                <label for="district" class="form-label text-danger">জেলা: (যেকোন একটি নির্বাচন করুন):</label>
                                <select class="form-select" id="district2" name="district2" required>
                                    <option selected disabled value="">নির্বাচন করুন (আবশ্যক)</option>
                                    <option>গাজীপুর</option>
                                    <option>গোপালগঞ্জ</option>
                                    <option>টাঙ্গাইল</option>
                                    <option>ঢাকা</option>
                                    <option>নরসিংদী</option>
                                    <option>নারায়ণগঞ্জ</option>
                                    <option>ফরিদপুর</option>
                                    <option>মাদারীপুর</option>
                                    <option>মানিকগঞ্জ</option>
                                    <option>মুন্সিগঞ্জ</option>
                                    <option>রাজবাড়ী</option>
                                    <option>শরিয়তপুর</option>
                                    <option>কিশোরগঞ্জ</option>
                                    <option>কুমিল্লা</option>
                                    <option>ব্রাক্ষনবাড়িয়া</option>
                                    <option>চাঁদপুর</option>
                                    <option>নোয়াখালী</option>
                                    <option>লক্ষীপুর</option>
                                    <option>ফেনী</option>
                                    <option>খাগড়াছড়ি</option>
                                    <option>রাঙ্গামাটি</option>
                                    <option>বান্দরবন</option>
                                    <option>চট্টগ্রাম</option>
                                    <option>কক্সবাজার</option>
                                    <option>চাঁপাইনবাবগঞ্জ</option>
                                    <option>জয়পুরহাট</option>
                                    <option>নওগাঁ</option>
                                    <option>নাটোর</option>
                                    <option>পাবনা</option>
                                    <option>বগুড়া</option>
                                    <option>রাজশাহী</option>
                                    <option>সিরাজগঞ্জ</option>
                                    <option>খুলনা</option>
                                    <option>চুয়াডাঙ্গা</option>
                                    <option>ঝিনাইদহ</option>
                                    <option>নড়াইল</option>
                                    <option>বাগেরহাট</option>
                                    <option>সাতক্ষীরা</option>
                                    <option>কুষ্টিয়া</option>
                                    <option>মাগুরা</option>
                                    <option>মেহেরপুর</option>
                                    <option>যশোর</option>
                                    <option>বরিশাল</option>
                                    <option>পটুয়াখালী</option>
                                    <option>ভোলা</option>
                                    <option>পিরোজপুর</option>
                                    <option>বরগুনা</option>
                                    <option>ঝালকাঠি</option>
                                    <option>সিলেট</option>
                                    <option>মৌলভীবাজার</option>
                                    <option>হবিগঞ্জ</option>
                                    <option>সুনামগঞ্জ</option>
                                    <option>কুড়িগ্রাম</option>
                                    <option>গাইবান্ধা</option>
                                    <option>ঠাকুরগাঁও</option>
                                    <option>দিনাজপুর</option>
                                    <option>নীলফামারী</option>
                                    <option>পঞ্চগড়</option>
                                    <option>রংপুর</option>
                                    <option>লালমনিরহাট</option>
                                    <option>ময়মংসিংহ</option>
                                    <option>জামালপুর</option>
                                    <option>নেত্রকোণা</option>
                                    <option>শেরপুর</option>
                                </select>
                                <!-- <div class="invalid-feedback">
                                    Please select a valid state.
                                </div> -->
                            </div>

                            <div class="mb-3">
                                <label for="blood_group" class="form-label text-danger">রক্তের গ্রুপ: (যেকোন একটি নির্বাচন করুন):</label>
                                <select class="form-select" id="blood_group2" name="blood_group2" required>
                                    <option selected disabled value="">নির্বাচন করুন (আবশ্যক)</option>
                                    <option>A+(এ পজেটিভ)</option>
                                    <option>A-(এ নেগেটিভ)</option>
                                    <option>B+(বি পজেটিভ)</option>
                                    <option>B-(বি নেগেটিভ)</option>
                                    <option>O+(ও পজেটিভ)</option>
                                    <option>O-(ও নেগেটিভ)</option>
                                    <option>AB+(এবি পজেটিভ)</option>
                                    <option>AB-(এবি নেগেটিভ)</option>
                                    <option>Others(অন্যান্য)</option>
                                </select>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address">ঠিকানা:</label>
                                <textarea class="form-control" rows="5" id="address2" name="address2" placeholder="যেখানে রক্ত প্রয়োজন তার ঠিকানা দিন। যত বিস্তারিত ও নির্ভুল ঠিকানা দিবেন তত দ্রুত রক্তদাতাগণ আপনার নিকট পৌঁছাতে পারবে।"></textarea>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address">উদ্দেশ্য:</label>
                                <textarea class="form-control" rows="5" id="reason2" name="reason2" placeholder="সংক্ষেপে আপনার রক্ত প্রয়োজনের কারণটি লিখুন।"></textarea>
                            </div>

                            <button type="submit" class="btn btn-outline-danger">জরুরী অবহিত করুন</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">বন্ধ করুন</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<!-- -->

</body>
</html>
