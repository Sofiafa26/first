<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Registration Form</h2>
    <form action="save_regis.php" method="post">
        <!-- คำนำหน้า -->
        <div class="mb-3">
            <label for="prefix" class="form-label">คำนำหน้า</label>
            <select class="form-select" id="prefix" name="prefix"required>
                <option value="" disabled selected>เลือกคำนำหน้า</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
            </select>
        </div>

        <!-- ชื่อ -->
        <div class="mb-3">
            <label for="firstName" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" name="firstName" required>
        </div>

        <!-- นามสกุล -->
        <div class="mb-3">
            <label for="lastName" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" name="lastName" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <!-- รหัสผ่าน -->
        <div class="mb-3">
            <label for="password" class="form-label">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <!-- วันเดือนปีเกิด -->
        <div class="mb-3">
            <label for="dob" class="form-label">วันเดือนปีเกิด</label>
            <input type="date" class="form-control" name="dob" required>
        </div>

        <!-- เพศ -->
        <div class="mb-3">
            <label for="gender" class="form-label">เพศ</label>
            <select class="form-select" name="gender" required>
                <option value="" disabled selected>เลือกเพศ</option>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
                <option value="อื่น ๆ">อื่น ๆ</option>
            </select>
        </div>

        <!-- รหัสนักศึกษา -->
        <div class="mb-3">
            <label for="studentId" class="form-label">รหัสนักศึกษา</label>
            <input type="text" class="form-control" name="studentId" required>
        </div>

        <!-- เบอร์โทรศัพท์ -->
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">เบอร์โทรศัพท์</label>
            <input type="tel" class="form-control" name="phoneNumber" required>
        </div>

        <!-- ที่อยู่ -->
        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่</label>
            <textarea class="form-control" name="address" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
