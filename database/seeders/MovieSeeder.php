<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Hộ Tâm',
                'genre' => 'tiên hiệp',
                'episodes' => 25,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Triệu Lộ Tư, Trần Triết Viễn',
                'rating' => 8.6,
                'imageUrl' => 'storage/ho-tam.webp',
                'content' => 'Tình yêu  nhẹ nhàng giữa hai người trẻ tuổi.'
            ],
            [
                'title' => 'Tàng Hải Truyện',
                'genre' => 'phá án',
                'episodes' => 35,
                'duration' => '45 phút',
                'status' => 'Đang chiếu',
                'actors' => 'Tiêu Chiến, Dương Tử',
                'rating' => 8.8,
                'imageUrl' => 'storage/tang-hai-chuyen.webp',
                'content' => 'Hành trình tu luyện để trở thành chân tiên trong đại lục huyền bí.'
            ],
            [
                'title' => 'Bí Mật Nơi Góc Tối',
                'genre' => 'Tâm lý, Tình cảm',
                'episodes' => 24,
                'duration' => '40 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Trương Dư Hi, Ngô Tuyên Nghi',
                'rating' => 8.2,
                'imageUrl' => 'storage/bi-mat-noi-goc-toi.webp',
                'content' => 'Một tình yêu nảy nở từ sự quan tâm thầm lặng.'
            ],
            [
                'title' => 'Nhiệm Vụ Bí Mật',
                'genre' => 'Hành động',
                'episodes' => 1,
                'duration' => '120 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Lý Hiện, Hồ Ca',
                'rating' => 7.9,
                'imageUrl' => 'storage/chien-binh-tren-khong.webp',
                'content' => 'Một điệp viên phải đối mặt với chính tổ chức của mình.'
            ],
            [
                'title' => 'Bóng Ma Quá Khứ',
                'genre' => 'Kinh dị',
                'episodes' => 1,
                'duration' => '100 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Châu Đông Vũ, Vương Nhất Bác',
                'rating' => 7.6,
                'imageUrl' => 'storage/bong-ma-qua-khu.webp',
                'content' => 'Một căn nhà bị ám ảnh bởi ký ức chết chóc.'
            ],
            [
                'title' => 'Chiến Binh Trên Không',
                'genre' => 'Chiến tranh',
                'episodes' => 1,
                'duration' => '130 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Trần Khôn, Tỉnh Bách Nhiên',
                'rating' => 7.5,
                'imageUrl' => 'storage/chien-binh-tren-khong.webp',
                'content' => 'Cuộc chiến sống còn trên bầu trời chống lại kẻ thù.'
            ],
            [
                'title' => 'Yêu Nhầm Bạn Thân',
                'genre' => 'Tình cảm, Học đường',
                'episodes' => 30,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Lâm Nhất, Hứa Giai Kỳ',
                'rating' => 8.1,
                'imageUrl' => 'storage/yeu-nham-ban-than',
                'content' => 'Tình cảm dở khóc dở cười giữa hai người bạn thân lâu năm.'
            ],
            [
                'title' => 'Bí Mật Kinh Hoàng',
                'genre' => 'Kinh dị, Hồi hộp',
                'episodes' => 1,
                'duration' => '105 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Trần Vỹ Đình, Dương Mịch',
                'rating' => 7.3,
                'imageUrl' => 'storage/bi-mat-kinh-hoang',
                'content' => 'Một vụ án bí ẩn làm đảo lộn cuộc sống yên bình.'
            ],
            [
                'title' => 'Chiếc Bật Lửa Và Váy Công Chúa',
                'genre' => 'Ngôn tình, Lãng mạn',
                'episodes' => 32,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Trương Tịnh Nghi, Trần Phi Vũ',
                'rating' => 8.5,
                'imageUrl' => 'storage/chiec-bat-lua-va-vay-cong-chua.webp',
                'content' => 'Câu chuyện yêu đương thời sinh viên với nhiều cung bậc cảm xúc.'
            ],
            [
                'title' => 'Liễu Chu Ký',
                'genre' => 'cổ trang, kiếm hiệp',
                'episodes' => 36,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Châu Dã, Hầu Minh Hạo',
                'rating' => 8.4,
                'imageUrl' => 'storage/lieu-chu-ky.jpg',
                'content' => 'Câu chuyện bảo vệ người yêu khỏi thế lực đen tối.'
            ],
            [
                'title' => 'Khom Lưng',
                'genre' => 'Chính kịch',
                'episodes' => 40,
                'duration' => '45 phút',
                'status' => 'Đang chiếu',
                'actors' => 'La Tấn, Dương Tử',
                'rating' => 8.0,
                'imageUrl' => 'storage/khom-lung.jpg',
                'content' => 'Cuộc đời đầy biến động và sự hy sinh thầm lặng.'
            ],
            [
                'title' => 'Tinh Lạc Ngưng Thành Đường',
                'genre' => 'Tiên hiệp, Tình cảm',
                'episodes' => 40,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'La Vân Hi, Bạch Lộc',
                'rating' => 8.9,
                'imageUrl' => 'storage/tinh-lac-ngung-thanh-duong.jpg',
                'content' => 'Tình yêu giữa thần và ma xuyên qua kiếp trước.'
            ],
            [
                'title' => 'Khó Dỗ Dành',
                'genre' => 'Cổ trang, Huyền huyễn',
                'episodes' => 32,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Chương Nhược Nam, Bạch Kính Đình',
                'rating' => 9.0,
                'imageUrl' => 'storage/kho-do-danh.jpg',
                'content' => 'tình yêu thời học sinh và vượt lên nghịch cảnh của tang diên dành cho ôn dĩ phàm...'
            ],
            [
                'title' => 'Hoài Thuỷ Trúc Đình',
                'genre' => 'Cổ trang, tiên hiệp',
                'episodes' => 40,
                'duration' => '45 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Trương Nhược Quân, Lý Thấm',
                'rating' => 9.1,
                'imageUrl' => 'storage/hoai-thuy-truc-dinh.webp',
                'content' => 'Một người trẻ thông minh bị cuốn vào vòng xoáy quyền lực.'
            ],
            [
                'title' => 'Hoa Mộc Lan',
                'genre' => 'cổ trang',
                'episodes' => 1,
                'duration' => '100 phút',
                'status' => 'Hoàn thành',
                'actors' => 'Dương Tử',
                'rating' => 7.8,
                'imageUrl' => 'storage/hoa-moc-lan',
                'content' => 'kể về cô gái a lan mạnh mé cải trang thành nam nhi để tòng quân ...'
            ],
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
