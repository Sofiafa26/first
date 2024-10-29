function calculateResults(answers) {
    const count = {
        a: 0,
        b: 0,
        c: 0,
        d: 0,
    };

    // นับคะแนนตามคำตอบที่เลือก
    answers.forEach(answer => {
        if (answer) {
            count[answer] += 1;
        }
    });

    // กำหนดประเภทเพลงตามคะแนนที่สูงสุด
    let highestCount = Math.max(count.a, count.b, count.c, count.d);
    let musicGenre = '';

    if (highestCount === count.a) {
        musicGenre = 'Rock';
    } else if (highestCount === count.b) {
        musicGenre = 'R&B';
    } else if (highestCount === count.c) {
        musicGenre = 'Pop';
    } else if (highestCount === count.d) {
        musicGenre = 'HipHop';
    }

    return `ประเภทเพลงที่เหมาะสม: ${musicGenre}`;
}

$(document).ready(function() {

    $('#submit-quiz').on('click', function() {
        const answers = [];

        // ดึงคำตอบจากแต่ละคำถาม
        for (let i = 1; i <= 10; i++) {
            const answer = $(`input[name="q${i}"]:checked`).val();
            answers.push(answer);
        }

        console.log(answers);

        // คำนวณคะแนนและแสดงผลลัพธ์
        const result = calculateResults(answers);
        
        Swal.fire({
            title: 'ผลลัพธ์',
            text: result,
            icon: 'success',
            confirmButtonText: 'ปิด'
        }).then((result) => {
            if (result.isConfirmed) {
                

                //insert to database
                $.ajax({
                    url: "insert_quiz.php",
                    type: "POST",
                    data: {
                        answers: answers
                    },
                    success: function(response) {
                        console.log(response);
                    }
                    
                })



            }
        });


    });

});

