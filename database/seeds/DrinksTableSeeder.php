<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drinks')->delete();
        
        \DB::table('drinks')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'cafe đen nóng',
                'price' => 13000,
                'status' => '<p><span style="box-sizing: border-box; font-weight: bolder; color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">C&agrave; ph&ecirc; đen n&oacute;ng&nbsp;</span><span style="box-sizing: border-box; color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">l&agrave; thức uống quen thuộc v&agrave;o buổi s&aacute;ng sớm, trong giờ l&agrave;m việc hay giờ giải lao của nhiều người. Tuy nhi&ecirc;n để gia tăng hương vị cho ly c&agrave; ph&ecirc;, ch&uacute;ng ta cần c&oacute; c&ocirc;ng thức pha chế v&agrave; đ&oacute; l&agrave;&nbsp;</span><a style="box-sizing: border-box; background-color: #ffffff; text-decoration-line: none; color: #222953; box-shadow: none; font-family: Roboto, sans-serif; font-size: 16px;" href="http://quangtanhoa.com/2-cach-pha-ca-phe-ngon-de-ban-giup-ban-tang-doanh-thu.html">c&aacute;ch pha c&agrave; ph&ecirc; đen</a></p>',
                'image' => 'img/drinks/1618302567.jpg',
                'created_at' => '2021-04-13 08:29:27',
                'updated_at' => '2021-04-13 08:29:27',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'cafe đen đá',
                'price' => 12000,
                'status' => '<p><span style="box-sizing: border-box; font-weight: bolder; color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">C&agrave; ph&ecirc; đen đ&aacute;&nbsp;</span><span style="box-sizing: border-box; color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">mỗi buổi s&aacute;ng</span><span style="color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">&nbsp;</span><span style="box-sizing: border-box; color: #7a7a7a; font-family: Roboto, sans-serif; font-size: 16px; background-color: #ffffff;">từ l&acirc;u đ&atilde; trở th&agrave;nh một th&oacute;i quen kh&ocirc;ng thể thiếu với người S&agrave;i G&ograve;n. Vị đắng của c&agrave; ph&ecirc; h&ograve;a lẫn với ch&uacute;t b&ugrave;i b&ugrave;i, nồng đậm khiến ai cũng phải m&ecirc; mẩn. Đ&oacute; l&agrave; một hương vị rất ri&ecirc;ng kh&ocirc;ng nơi n&agrave;o c&oacute; được. V&agrave;&nbsp;<span style="box-sizing: border-box; font-weight: bolder;">c&aacute;ch pha c&agrave; ph&ecirc; đen đ&aacute; ngon</span>&nbsp;cũng l&agrave; một b&iacute; quyết ri&ecirc;ng l&agrave;m n&ecirc;n thương hiệu cho nhiều qu&aacute;n c&agrave; ph&ecirc;.</span></p>',
                'image' => 'img/drinks/1618302645.jpg',
                'created_at' => '2021-04-13 08:30:45',
                'updated_at' => '2021-04-13 08:30:45',
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'cafe sửa đá',
                'price' => 16000,
                'status' => '<p><em style="box-sizing: border-box; font-family: Tahoma, Geneva, sans-serif; font-size: 15px; background-color: #ffffff;"><span style="box-sizing: border-box;">Những ng&agrave;y h&egrave; nắng n&oacute;ng oi ả được thưởng thức một cốc cafe sữa đ&aacute; thực sự l&agrave; một điều tuyệt vời. Thức uống n&agrave;y được rất nhiều bạn trẻ y&ecirc;u th&iacute;ch bởi m&ugrave;i vị thơm ngon v&agrave; b&eacute;o ngậy kết hợp c&ugrave;ng sự m&aacute;t lạnh của đ&aacute;. Bạn cũng c&oacute; thể tự l&agrave;m cho m&igrave;nh những cốc cafe như vậy với&nbsp;</span></em><span style="box-sizing: border-box; font-weight: 800; font-family: Tahoma, Geneva, sans-serif; font-size: 15px; background-color: #ffffff;"><em style="box-sizing: border-box;">c&aacute;ch pha cafe sữa đ&aacute;</em></span><em style="box-sizing: border-box; font-family: Tahoma, Geneva, sans-serif; font-size: 15px; background-color: #ffffff;"><span style="box-sizing: border-box;">&nbsp;ngon đ&uacute;ng điệu sau đ&acirc;y.</span></em></p>',
                'image' => 'img/drinks/1618302699.jpg',
                'created_at' => '2021-04-13 08:31:39',
                'updated_at' => '2021-04-13 08:31:39',
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'cafe đá xoay chocolate',
                'price' => 21000,
                'status' => '<p><span style="color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">Bạn đ&atilde; từng nghe n&oacute;i đến một thức uống mang t&ecirc;n&nbsp;</span><span style="box-sizing: inherit; font-weight: bold; color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">c&agrave; ph&ecirc; đ&aacute; xay</span><span style="color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">? Bạn t&ograve; m&ograve; kh&ocirc;ng biết hương vị của loại c&agrave; ph&ecirc; n&agrave;y như thế n&agrave;o? Liệu c&aacute;ch pha chế c&oacute; dễ hay kh&ocirc;ng? H&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i kh&aacute;m ph&aacute; 7 c&aacute;ch l&agrave;m loại c&agrave; ph&ecirc; n&agrave;y với những hương vị kh&aacute;c nhau ngay dưới đ&acirc;y.</span></p>',
                'image' => 'img/drinks/1618302758.jpg',
                'created_at' => '2021-04-13 08:32:39',
                'updated_at' => '2021-04-13 08:32:39',
            ),
            4 => 
            array (
                'id' => 16,
                'name' => 'capuchino',
                'price' => 25000,
                'status' => '<p><span style="color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">Bạn đ&atilde; từng nghe n&oacute;i đến một thức uống mang t&ecirc;n&nbsp;</span><span style="box-sizing: inherit; font-weight: bold; color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">c&agrave; ph&ecirc; đ&aacute; xay</span><span style="color: #333333; font-family: Muli; font-size: 17px; letter-spacing: 0.15px; text-align: justify; background-color: #ffffff;">? Bạn t&ograve; m&ograve; kh&ocirc;ng biết hương vị của loại c&agrave; ph&ecirc; n&agrave;y như thế n&agrave;o? Liệu c&aacute;ch pha chế c&oacute; dễ hay kh&ocirc;ng? H&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i kh&aacute;m ph&aacute; 7 c&aacute;ch l&agrave;m loại c&agrave; ph&ecirc; n&agrave;y với những hương vị kh&aacute;c nhau ngay dưới đ&acirc;y.</span></p>',
                'image' => 'img/drinks/1618303073.jpg',
                'created_at' => '2021-04-13 08:37:53',
                'updated_at' => '2021-04-13 08:37:53',
            ),
        ));
        
        
    }
}