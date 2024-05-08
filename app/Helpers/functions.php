<?php

// app/Helpers/functions.php

if (!function_exists('estimatedReadingTime')) {
    function estimatedReadingTime($content) {
        // Số từ trung bình cho mỗi phút đọc
        $wordsPerMinute = 200;

        // Tính toán số từ trong nội dung
        $wordCount = str_word_count(strip_tags($content));

        // Tính toán thời gian đọc ước lượng
        $readingTime = ceil($wordCount / $wordsPerMinute);

        return $readingTime;
    }
}
