<?php

session_start();

include('include/include_db_oo.php');

if (!isset($_SESSION['users_id'])) {
    header('Location: login.php');
    exit();
}


$user_id = $_SESSION['users_id'];


$sql = "SELECT * FROM users WHERE users_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    header('Location: login.php');
    exit();
}




?>


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp5b6hP8Q2e6y3g5O8f8fU9qPwh4V9HzD81w5m" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <div class="d-flex">

        <div class="content">

            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 1</h5>
                            <p class="card-text">คำถาม เวลาฟังเพลง คุณชอบอารมณ์แบบไหนที่สุด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ตื่นเต้น เร้าใจ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ผ่อนคลาย สบายใจ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เศร้า ซึ้งใจ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">สนุกสนาน ร่าเริง</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 2</h5>
                            <p class="card-text">คำถาม แนวเพลงไหนที่คุณมักฟังตอนทำกิจกรรมต่างๆ</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ร็อค</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">แจ๊ส</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ป๊อป</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ฮิปฮอป</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 3</h5>
                            <p class="card-text">คำถาม คุณชอบฟังเพลงจากยุคไหนมากที่สุด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ยุค 80s-90s</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ยุค 2000s</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ยุคปัจจุบัน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ยุคก่อน 80s</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 4</h5>
                            <p class="card-text">คำถาม คุณชอบฟังเพลงที่เน้นเสียงร้องหรือลีลาการเล่นดนตรีมากกว่ากัน</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">เน้นเสียงร้อง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">เน้นดนตรี</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ชอบทั้งสองอย่าง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ไม่ซีเรียส เน้นความสนุก</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 5</h5>
                            <p class="card-text">คำถาม คุณชอบฟังเพลงที่มีเนื้อหาประมาณไหน</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ความรักและการอกหัก</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2"> การใช้ชีวิต</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">สังคมและโลกปัจจุบัน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">จินตนาการและความฝัน</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 6</h5>
                            <p class="card-text">คำถาม ช่วงเวลาไหนที่คุณมักฟังเพลงมากที่สุด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">เช้าตรู่</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ตอนกลางวัน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ตอนเย็น</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">กลางคืน</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 7</h5>
                            <p class="card-text">คำถาม แนวเพลงไหนที่คุณคิดว่าแสดงออกถึงความเป็นตัวเองมากที่สุด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ร็อค/เมทัล</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">โซล/R&B</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3"> ป๊อป/ซินธ์ป๊อป</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ฮิปฮอป/แร็ป</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 8</h5>
                            <p class="card-text">คำถาม คุณสนใจในเพลงที่มีเนื้อหาเกี่ยวกับความหมายลึกซึ้งไหม</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1"> ชอบมาก</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ชอบบ้าง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3"> เฉยๆ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ไม่ค่อยสนใจ</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 9</h5>
                            <p class="card-text">คำถาม ถ้าให้คุณฟังเพลงที่ไม่ค่อยรู้จัก คุณจะเลือกแนวไหน</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">โฟล์ค/บลูส์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">อินดี้ร็อค</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เพลงชาติพันธุ์หรือแนวทดลอง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">อิเล็กทรอนิกส์</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 10</h5>
                            <p class="card-text">คำถาม คุณคิดว่าเพลงแบบไหนที่ทำให้คุณรู้สึกมีความสุขที่สุด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">เพลงที่มีทำนองสนุกสนาน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">เพลงที่ให้กำลังใจ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เพลงที่ช่วยผ่อนคลาย</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">เพลงที่มีจังหวะเต้นได้</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1 mx-auto">
                    <button type="submit" class="btn mb-3 mt-2 btn-primary">ส่งคำตอบ</button>   
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>