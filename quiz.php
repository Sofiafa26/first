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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/quiz.css">
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
                                <label class="form-check-label" for="flexRadioDefault2">R&b</label>
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
                            <p class="card-text">คำถาม เวลาขับรถหรือเดินทาง คุณมักจะเลือกฟังเพลงแบบไหน
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">เพลง แสงสุดท้าย</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">เพลง พิง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เพลง ก่อนฤดูฝน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">เพลง วายร้าย</label>
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
                                <label class="form-check-label" for="flexRadioDefault1">เน้นเสียงดนตรี</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">เน้นเสียงร้อง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เน้นทั้งสองอย่าง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">เน้นเสียงและองค์ประกอบ</label>
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
                                <label class="form-check-label" for="flexRadioDefault1">ปัญหาสังคม มีการเล่าเรื่องราว</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2"> ความรักและอารมณ์ที่ลึกซึ้ง </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ประสบการณ์ในชีวิต</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">เรื่องราวชีวิต การต่อสู้ ความฝัน</label>
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
                                <label class="form-check-label" for="flexRadioDefault1">ร็อค</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">R&B</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3"> ป๊อป</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="d" id="flexRadioDefault4">
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
                            <h5 class="card-title">ข้อที่ 8</h5>
                            <p class="card-text">คำถาม คุณชอบอัลบั้มจากศิลปินใด</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1"> บอดี้สแลม </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">นนท์ ธนนท์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">Taylor Swift</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">D Gerrard</label>
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
                            <p class="card-text">คำถาม คุณชอบเสียงร้องแบบไหนในเพลง</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">เสียงสูง ทรงพลัง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">เสียงนุ่ม ละมุน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เสียงสดใส ร่าเริง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">เสียงเป็นเอกลักษณ์</label>
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
                            <p class="card-text">คำถาม ถ้าไปคอนเสิร์ต คุณอยากได้บรรยากาศแบบไหน</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">มีการแสดงสดเต็มรูปแบบ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">บรรยากาศอบอุ่น สบายๆ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เสนุกสุดเหวี่ยง</label>
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
                    <button type="submit" id="submit-quiz" class="btn mb-3 mt-2 btn-primary">ส่งคำตอบ</button>   
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/quiz.js"></script>