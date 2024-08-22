-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvienso`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsach`
--

CREATE TABLE `chitietsach` (
  `id` int(11) NOT NULL,
  `masach` int(10) UNSIGNED NOT NULL,
  `mangonngu` tinyint(3) UNSIGNED NOT NULL,
  `sotrang` int(10) UNSIGNED DEFAULT NULL,
  `namxuatban` smallint(5) UNSIGNED NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kichthuoc` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trongluong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayphathanh` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietsach`
--

INSERT INTO `chitietsach` (`id`, `masach`, `mangonngu`, `sotrang`, `namxuatban`, `noidung`, `kichthuoc`, `trongluong`, `ngayphathanh`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 120, 2017, '\n\n<p>Luật Trọng tài thương mại được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam khóa XII, kỳ họp thứ 7 thông qua ngày 17/6/2010, có hiệu lực thi hành từ ngày 01/01/2011 thay thế Pháp lệnh Trọng tài thương mại năm 2003. Luật quy định về thẩm quyền của Trọng tài thương mại, các hình thức trọng tài, tổ chức trọng tài, Trọng tài viên; trình tự, thủ tục trọng tài; quyền, nghĩa vụ và trách nhiệm của các bên trong tố tụng trọng tài; thẩm quyền của Tòa án đối với hoạt động trọng tài; tổ chức và hoạt động của Trọng tài nước ngoài tại Việt Nam, thi hành phán quyết trọng tài. Đây là cơ sở pháp lý đầy đủ và thuận lợi nhất cho việc lựa chọn trọng tài để giải quyết các tranh chấp về đầu tư, kinh doanh, thương mại, phù hợp với thực tiễn giải quyết tranh chấp thương mại của Việt Nam và thông lệ quốc tế.</p>\n\n<p>Để bảo đảm thực thi Luật Trọng tài thương mại có hiệu quả, Chính phủ và Hội đồng Thẩm phán Tòa án nhân dân tối cao đã ban hành các văn bản hướng dẫn thi hành Luật.</p>\n\n<p>Cuốn sách Các quy định pháp luật hướng dẫn Luật Trọng tài thương mại giới thiệu đến bạn đọc những văn bản hướng dẫn thi hành hiện hành và cơ bản nhất về trọng tài thương mại.</p>\n\n<p>Xin giới thiệu cuốn sách với bạn đọc.</p>', '14.5 x 20.5 cm', '400', '2017-06-11', '2019-05-09 01:14:01', '2019-05-09 01:14:01'),
(2, 16, 1, 220, 2017, '<p>Ai l&agrave; &ldquo;sếp&rdquo; của c&aacute;c vị thần Hy Lạp? Vị thần Ai cập n&agrave;o c&oacute; đầu lừa? Con mắt thứ ba của thần Shiva d&ugrave;ng để l&agrave;m g&igrave;? T&oacute;c của Medusa l&agrave;m bằng g&igrave;? Oedipus đ&atilde; cưới ai m&agrave; ch&agrave;ng kh&ocirc;ng hề hay biết? Năm mới Trung quốc bắt nguồn từ con vật n&agrave;o? Với người Aztec, con người đầu ti&ecirc;n xuất hiện như thế n&agrave;o?<br />\r\n<br />\r\nHơn 200 c&acirc;u hỏi-đ&aacute;p th&uacute; vị về thần thoại Hy Lạp, Ai Cập, Viking, Ấn Độ, Nhật Bản&hellip; v&agrave; c&ograve;n nhiều thứ kh&aacute;c nữa.</p>\r\n\r\n<p><em>* Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế VAT. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</em></p>', '14.5 x 20.5 cm', '320', '2018-01-10', '2019-05-09 01:38:00', '2019-05-09 01:38:00'),
(3, 5, 1, 225, 2018, '<p>Chủ tịch Hồ Chí Minh, cuộc đời và sự nghiệp của Người, tư tưởng và nhân cách của Người mãi mãi là nguồn cảm hứng bất tận của các nhà nghiên cứu, nhà văn, nhà thơ, nhà báo... Trong số đó, Sơn Tùng là nhà văn đã để lại dấu ấn sâu sắc trong mảng đề tài sáng tác về Chủ tịch Hồ Chí Minh. Nhân dịp kỷ niệm 35 năm (1987 - 2022) UNESCO vinh danh Chủ tịch Hồ Chí Minh là Anh hùng giải phóng dân tộc, Nhà văn hóa kiệt xuất, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản ấn phẩm Bông sen vàng của Nhà văn Sơn Tùng. Đây là một trong số những tác phẩm nổi tiếng của ông viết về thời niên thiếu của Chủ tịch Hồ Chí Minh.</p>\n\n<p>Cuốn sách toát lên nét đẹp dung dị của tình người và chứa đựng tâm hồn cao cả của vị lãnh tụ vĩ đại của dân tộc Việt Nam từ khi còn là cậu bé con. Hy vọng cuốn sách góp phần tích cực vào sự nghiệp giáo dục, động viên thế hệ trẻ Việt Nam nâng cao ý thức, tinh thần trách nhiệm với vận mệnh Tổ quốc, rèn luyện bản thân thành người có phẩm cách lớn.</p>\n\n<p>Xin trân trọng giới thiệu cuốn sách với bạn đọc!</p>', '14.5 x 20.5 cm', '600', '2019-04-19', '2019-05-08 12:14:01', '2019-05-08 12:14:01'),
(4, 4, 1, 120, 2019, '', '14.5 x 20.5 cm', '300', '2019-02-11', '2019-05-09 01:16:43', '2019-05-09 01:16:43'),
(5, 17, 1, 120, 2018, '<p>Kaizaki Arata, 27 tuổi, thất nghiệp, ch&aacute;n nản với cuộc đời. T&igrave;nh cờ trong một lần say xỉn, anh trở th&agrave;nh đối tượng th&iacute; nghiệm của dự &aacute;n mang t&ecirc;n&nbsp;ReLIFE, bị thu nhỏ về h&igrave;nh dạng của một học sinh cao trung 17 tuổi, từ đ&oacute; bắt đầu h&agrave;nh tr&igrave;nh học lại kỹ năng sống, l&agrave;m lại cuộc đời.</p>', '14.5 x 20.5 cm', '320', '2019-01-12', '2019-05-09 01:38:38', '2019-05-09 01:38:38'),
(6, 18, 1, 120, 2018, '<p>Trận chiến giữa c&aacute;c Ma Vương kết th&uacute;c với phần thắng thuộc về Ma Vương {S&aacute;ng Tạo} Procel.</p>\r\n\r\n<p>Nhưng chưa dừng lại ở đ&oacute;, Procel c&ugrave;ng những c&ocirc; con g&aacute;i của m&igrave;nh phải đối mặt với cuộc chiến c&ograve;n kinh khủng hơn nữa - cuộc chiến với con người.</p>\r\n\r\n<p>Để chuẩn bị cho cuộc chiến n&agrave;y, c&oacute; rất nhiều thứ được s&aacute;ng tạo ra, v&agrave; cả sự xuất hiện của những Y&ecirc;u Ma ho&agrave;n to&agrave;n mới.</p>', '14.5 x 20.5 cm', '320', '2019-01-12', '2019-05-09 01:39:19', '2019-05-09 01:39:19'),
(7, 19, 1, 120, 2019, '<p>Một ch&agrave;ng trai trẻ bị đ&acirc;m đến chết v&igrave; những con c&aacute; qu&yacute; gi&aacute; của m&igrave;nh. Một &ocirc;ng tr&ugrave;m ch&acirc;u &Aacute; mua con c&aacute; rồng độc nhất v&ocirc; nhị với gi&aacute; 150.000 đ&ocirc; la. Một th&aacute;m tử đuổi theo những kẻ bu&ocirc;n lậu th&uacute; cưng qua đường phố New York... Cuốn s&aacute;ch Con rồng sau bể k&iacute;nh kể chuyện lại những c&acirc;u chuyện phi thường về nỗi &aacute;m ảnh, sự hoang tưởng v&agrave; những t&ecirc;n tội phạm li&ecirc;n quan đến một lo&agrave;i c&aacute; kh&ocirc;ng giống bất k&igrave; lo&agrave;i vật n&agrave;o kh&aacute;c: một động vật ăn thịt hung dữ xuất hiện từ thời kỳ khủng long c&ograve;n tồn tại tr&ecirc;n tr&aacute;i đất.&nbsp;<br />\r\n&quot;Một cuốn s&aacute;ch c&oacute; t&iacute;nh khai mở lạ k&igrave;.&quot; - The New York Times&nbsp;<br />\r\n&quot;Mang m&agrave;u sắc căng thẳng của một tiểu thuyết trinh th&aacute;m, Voigt đ&atilde; vẽ n&ecirc;n một thế giới sống động của những vụ giết người, bu&ocirc;n b&aacute;n chợ đen v&agrave; việc hủy hoại m&ocirc;i trường sinh tồn của một lo&agrave;i c&aacute; m&agrave; trớ tr&ecirc;u thay, n&oacute; lại được coi l&agrave; biểu tượng của may mắn v&agrave; sức cuốn h&uacute;t.&quot; - Discover<br />\r\n&quot;Một c&acirc;u chuyện v&ocirc; c&ugrave;ng ấn tượng, đầy bất ngờ v&agrave; hồi hộp... Mọi thứ bỗng trở n&ecirc;n k&igrave; dị.&quot; - The Wall Street Journal</p>\r\n\r\n<p>(Con rồng sau bể k&iacute;nh kể về h&agrave;nh tr&igrave;nh nữ nh&agrave; b&aacute;o Emily Voigt đi t&igrave;m c&aacute; rồng hoang d&atilde; - lo&agrave;i c&aacute; cảnh đắt nhất thế giới. H&agrave;nh tr&igrave;nh n&agrave;y đ&atilde; đưa c&ocirc; đi khắp to&agrave;n cầu, theo ch&acirc;n những người nu&ocirc;i c&aacute; cảnh k&igrave; lạ đến c&aacute;c khu rừng xa x&ocirc;i nhất h&agrave;nh tinh để lần theo dấu vết của c&aacute; rồng tự nhi&ecirc;n.)&nbsp;</p>', '14.5 x 20.5 cm', '500', '2019-03-12', '2019-05-09 01:40:06', '2019-05-09 01:40:06'),
(8, 20, 1, 120, 2019, '<p>Truyện xoay quanh cuộc sống của ch&agrave;ng trai Đinh Tuấn Kiệt v&agrave; c&ocirc; thi&ecirc;n kim tiểu thư L&acirc;m Tiểu N&ecirc;. Họ y&ecirc;u nhau, họ xa nhau, họ c&oacute; những vướng mắc trong cuộc sống, họ c&oacute; khoảnh khắc hạnh ph&uacute;c, họ đến với nhau, họ c&ugrave;ng sinh ra những đứa con m&agrave; họ hết mực y&ecirc;u thương, để rồi họ chia tay nhau v&igrave; những l&yacute; do thật sự kh&ocirc;ng ai ngờ tới. Kh&ocirc;ng &agrave;o ạt dồn dập, kh&ocirc;ng đi theo một logic n&agrave;o, t&igrave;nh cảm của họ cứ tr&ocirc;i một c&aacute;ch ngẫu hứng để rồi họ cảm thấy y&ecirc;u nhau từ l&uacute;c n&agrave;o kh&ocirc;ng biết. Một ch&agrave;ng trai th&agrave;nh đạt v&agrave; c&oacute; phần kh&oacute; t&iacute;nh, hơi truyền thống, một c&ocirc; g&aacute;i nh&iacute; nhảnh, hồn nhi&ecirc;n, một cặp đ&ocirc;i so le ... hạnh ph&uacute;c.</p>\r\n\r\n<p>Hạnh ph&uacute;c tuởng như đ&atilde; đuợc định đoạt, thế nhưng &quot;... c&oacute; ai ngờ rằng, c&oacute; một số việc nh&igrave;n qua th&igrave; thấy b&igrave;nh y&ecirc;n nhưng kỳ thật sau ch&uacute;ng tiềm ẩn rất nhiều phong ba, nhưng kh&ocirc;ng ai c&oacute; thể suốt đời dẹp y&ecirc;n được những trận phong ba đ&oacute;.&quot;</p>\r\n\r\n<p>Một c&aacute;i kết đầy bất ngờ sẽ l&agrave; lời giải đ&aacute;p cho tất cả mớ b&ograve;ng bong tr&ecirc;n...</p>', '14.5 x 20.5 cm', '500', '2019-03-12', '2019-05-09 01:40:39', '2019-05-09 01:40:39'),
(9, 7, 1, 150, 2019, '<p>Luật Công chứng năm 2014 được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam khóa XIII, kỳ họp thứ 7 thông qua ngày 20/6/2014. Luật này quy định về công chứng viên, tổ chức hành nghề công chứng, việc hành nghề công chứng, thủ tục công chứng và quản lý nhà nước về công chứng. Luật có hiệu lực thi hành từ ngày 01/01/2015 và thay thế Luật Công chứng năm 2006.\n\n\nTại kỳ họp thứ 5 Quốc hội khóa XIV đã thông qua Luật sửa đổi, bổ sung một số điều của 11 luật có liên quan đến quy hoạch năm 2018, có hiệu lực từ ngày 01/01/2019. Luật này sửa đổi, bổ sung một số điều của Luật Công chứng năm 2014; tại kỳ họp thứ 5 Quốc hội khóa XV thông qua Luật Giá năm 2023, Luật này tiếp tục sửa đổi, bổ sung một số điều của Luật Công chứng năm 2014.\n\n\nĐể triển khai thi hành Luật, Chính phủ, Bộ Tài chính, Bộ Tư pháp đã ban hành các văn bản hướng dẫn một số điều của Luật Công chứng; hướng dẫn tập sự hành nghề công chứng; quy định mức thu, chế độ thu, nộp, quản lý, sử dụng phí công chứng; phí chứng thực; phí thẩm định tiêu chuẩn, điều kiện hành nghề công chứng; phí thẩm định điều kiện hoạt động Văn phòng công chứng; lệ phí cấp thẻ công chứng viên...\n\n\nNhằm cung cấp cho bạn đọc văn bản Luật Công chứng đã được hợp nhất và các nghị định, thông tư hướng dẫn thi hành, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản cuốn sách Luật Công chứng năm 2014 (sửa đổi, bổ sung năm 2018, 2023) và các văn bản hướng dẫn thi hành.\n\n\nXin giới thiệu cuốn sách với bạn đọc.\n\n</p>', '14.5 x 20.5 cm', '420', '2019-03-14', '2019-05-09 01:17:56', '2019-05-09 01:17:56'),
(10, 6, 1, 382, 2017, '<p>Cuốn hồi ký Đi theo con đường của Bác kể về quá trình hoạt động cách mạng của Đại tướng Văn Tiến Dũng từ những ngày đầu mới gia nhập đội ngũ, những người cộng sản trải qua cuộc kháng chiến chống thực dân Pháp xâm lược và những năm tháng xây dựng quân đội tiến lên chính quy, hiện đại trên miền Bắc…</p>\n\n<p>Qua những trang hồi ký của Đại tướng, hình ảnh của Chủ tịch Hồ Chí Minh được tái hiện một cách giản dị, chân thực, cảm động; đồng thời giúp chúng ta thấy rõ công lao to lớn của Người trong việc xây dựng, giáo dục và rèn luyện Quân đội nhân dân Việt Nam, “trung với nước, hiếu với dân”, ngày càng trưởng thành vững mạnh.</p>\n\n<p>Đáp ứng nhu cầu của bạn đọc, Nhà xuất bản Chính trị quốc gia Sự thật tái bản cuốn hồi ký Đi theo con đường của Bác của Đại tướng Văn Tiến Dũng. Nội dung cuốn sách được chia làm bốn phần:</p>', '14.5 x 20.5 cm', '700', '2019-04-01', '2019-05-08 15:23:05', '2019-05-08 15:23:05'),
(11, 8, 1, 150, 2019, '', '14.5 x 20.5 cm', '420', '2019-03-14', '2019-05-09 01:19:22', '2019-05-09 01:19:22'),
(12, 1, 1, 57, 2016, '\n', '14.5 x 20.5 cm', '500', '2019-04-12', '2019-05-09 01:05:47', '2019-05-09 01:05:47'),
(13, 2, 1, 200, 2018, '\n<p>Nhằm hệ thống sự lãnh đạo, chỉ đạo của Đảng, đứng đầu là đồng chí Tổng Bí thư Nguyễn Phú Trọng, về xây dựng và phát triển nền văn hóa Việt Nam tiên tiến, đậm đà bản sắc dân tộc, giúp các ngành, các cấp, các địa phương, cán bộ, đảng viên, Nhân dân xác định rõ quan điểm, mục tiêu, định hướng, nhiệm vụ phát triển văn hóa, để văn hóa thực sự trở thành nền tảng tinh thần, động lực và nguồn lực nội sinh cho phát triển đất nước, Ban Tuyên giáo Trung ương chủ trì, phối hợp với Bộ Văn hóa, Thể thao và Du lịch, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản cuốn sách Xây dựng và phát triển nền văn hóa Việt Nam tiên tiến, đậm đà bản sắc dân tộc của đồng chí Tổng Bí thư Nguyễn Phú Trọng.</p>\n\n<p>Cuốn sách tuyển chọn 92 bài viết, bài phát biểu, bài nói, lược ghi, trả lời phỏng vấn, thư... của Tổng Bí thư Nguyễn Phú Trọng về xây dựng và phát triển nền văn hóa Việt Nam trong thời gian gần 60 năm qua. Nội dung các bài phát biểu, bài viết thể hiện sự quan tâm sâu sắc của đồng chí Tổng Bí thư đối với việc xây dựng, giữ gìn và phát triển nền văn hóa Việt Nam với các yếu tố truyền thống và hiện đại, bản sắc và hội nhập, tạo nguồn lực nội sinh và huy động sức mạnh của văn hóa, con người Việt Nam trong công cuộc xây dựng, phát triển đất nước phồn vinh, thịnh vượng.</p>\n\n<p>Xin trân trọng giới thiệu cuốn sách với bạn đọc.</p>', '14.5 x 20.5 cm', '890', '2018-09-11', '2019-05-09 01:08:06', '2019-05-09 01:08:06'),
(14, 21, 1, 70, 2018, '<p>Kyoka vừa ch&iacute;nh thức trở th&agrave;nh nh&acirc;n vi&ecirc;n c&ocirc;ng ty th&aacute;m tử th&igrave; c&oacute; một y&ecirc;u cầu c&ocirc;ng việc nặc danh đ&ograve;i đ&iacute;ch th&acirc;n c&ocirc; b&eacute; thực hiện.</p>\r\n\r\n<p>Kyoka c&ugrave;ng Atsushi đi điều tra, nhưng kh&ocirc;ng hiểu sao Montgomery cứ chen v&agrave;o ph&aacute; đ&aacute;m!?</p>\r\n\r\n<p>Người đ&agrave;n &ocirc;ng tưởng chừng đ&atilde; chết t&aacute;i xuất, c&ograve;n Dostoevsky cuối c&ugrave;ng cũng nhe nanh về ph&iacute;a c&ocirc;ng ty th&aacute;m tử v&agrave; mafia.</p>\r\n\r\n<p>&ldquo;Con quỷ&rdquo; đ&aacute;ng sợ đ&oacute; đang chậm r&atilde;i nhưng chắc chắn, nuốt trọn mặt tối của Yokohama.</p>', '14.5 x 20.5 cm', '500', '2018-03-16', '2019-05-09 01:41:40', '2019-05-09 01:41:40'),
(15, 22, 1, 150, 2019, '<p><strong><em>&ldquo;...&nbsp;</em></strong><em>tại sao con người lại l&agrave;m thế n&agrave;y với nhau? S&uacute;a muốn hỏi, v&igrave; sao S&uacute;a chấp nhận l&agrave;m vợ Phống rồi, ở y&ecirc;n trong nh&agrave; họ Tr&aacute;ng rồi m&agrave; Phống vẫn kh&ocirc;ng vừa l&ograve;ng? Phống c&ograve;n muốn S&uacute;a như một con b&ograve; c&aacute;i, khi chồng leo l&ecirc;n người phải rống l&ecirc;n từng cơn. Phống l&agrave; người hay kh&ocirc;ng phải người?... S&uacute;a thấy sợ Phống. Thấy gh&ecirc; tởm. Kh&ocirc;ng ai dạy S&uacute;a khi l&agrave;m vợ th&igrave; phải biết k&ecirc;u l&ecirc;n khi chồng n&oacute; leo l&ecirc;n người. Tại sao đ&agrave;n b&agrave; lại phải k&ecirc;u l&ecirc;n như b&ograve;? S&uacute;a r&ugrave;ng m&igrave;nh, buồn n&ocirc;n.&rdquo;</em></p>\r\n\r\n<p>&ldquo;... tại sao con người lại l&agrave;m thế n&agrave;y với nhau?&rdquo;&nbsp;<em>Lặng y&ecirc;n dưới vực s&acirc;u</em>, với lối viết ch&acirc;n thực đến gai người, kh&ocirc;ng ngừng tra vấn ch&uacute;ng ta bằng c&acirc;u hỏi nhức nhối ấy.&nbsp;T&igrave;nh y&ecirc;u&nbsp;bị ch&agrave; đạp, th&acirc;n phận bị gi&agrave;y v&ograve;, hy vọng bị dối lừa, những con người mộc mạc nhưng m&atilde;nh liệt trong thẳm s&acirc;u t&acirc;m hồn nơi v&ugrave;ng cao U Khố Sủ đau đớn đi t&igrave;m c&acirc;u trả lời, để rồi, như một định mệnh oan nghiệt, bị l&ocirc;i tuột xuống đ&aacute;y vực s&acirc;u hun h&uacute;t, tối, v&agrave; lặng c&acirc;m.&nbsp;Tiểu thuyết&nbsp;của Đỗ B&iacute;ch Th&uacute;y l&agrave; nỗi trăn trở kh&ocirc;n ngu&ocirc;i về cuộc sống với biết bao những bi kịch, những ngang tr&aacute;i r&igrave;nh rập nuốt chửng con người.</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:42:23', '2019-05-09 01:42:23'),
(16, 23, 1, 150, 2019, '<p>Georgiana l&agrave; người phụ nữ quyền lực nhất Anh Quốc - Nữ ho&agrave;ng của thế giới ngầm London m&agrave; kh&ocirc;ng ai c&oacute; thể chống lại.</p>\r\n\r\n<p>Duncan West l&agrave; người duy nhất đủ th&ocirc;ng minh để kh&aacute;m ph&aacute; sự thật, để ph&aacute; huỷ tất cả những g&igrave; c&ocirc; đ&atilde; g&acirc;y dựng, bao gồm cả tr&aacute;i tim th&eacute;p m&agrave; c&ocirc; t&ocirc;i luyện.</p>\r\n\r\n<p>C&ocirc; mang trong m&igrave;nh th&acirc;n phận b&iacute; ẩn, anh sống với th&acirc;n thế tội lỗi của bản th&acirc;n. Hai người &ndash; v&ocirc; số b&iacute; mật, đều ra sức che đậy, giấu giếm sự thật v&agrave; t&igrave;nh cảm của ch&iacute;nh m&igrave;nh, liệu sẽ ra sao khi tất cả được phơi b&agrave;y?</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:42:54', '2019-05-09 01:42:54'),
(17, 24, 1, 150, 2019, '<p>&ldquo;Đi n&agrave;o Asuna! Nắm chặt v&agrave;o! Tilnel, xuất ph&aacute;t!&rdquo;</p>\r\n\r\n<p>Tạm biệt nữ kị sĩ b&iacute; ẩn Kizmel thuộc tộc Hắc tinh linh, Kirito v&agrave; Asuna tiến đến tầng tiếp theo. Trải rộng khắp tầng 4 của Aincrad l&agrave; &ldquo;thủy lộ&rdquo;.</p>\r\n\r\n<p>Hai người đ&atilde; xoay xở thế n&agrave;o đ&oacute; để đặt ch&acirc;n l&ecirc;n được một th&agrave;nh phố tạo n&ecirc;n từ v&ocirc; v&agrave;n chiếc thuyền đ&aacute;y bằng m&agrave;u trắng c&oacute; k&iacute;ch cỡ lớn nhỏ kh&aacute;c nhau nổi bồng bềnh tr&ecirc;n mặt hồ. Muốn tự do đi lại ở tầng n&agrave;y, họ bắt buộc phải lấy được một chiếc thuyền đ&aacute;y bằng chuy&ecirc;n d&ugrave;ng cho việc di chuyển.</p>\r\n\r\n<p>Để kiếm nguy&ecirc;n liệu l&agrave;m thuyền, Kirito v&agrave; Asuna phải đối mặt với con gấu lửa khổng lồ Magnatherium! Sau đ&oacute;, ở tầng 4 n&agrave;y, họ đ&atilde; bất ngờ gặp lại một người&hellip;</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:43:16', '2019-05-09 01:43:16'),
(18, 25, 1, 150, 2019, '<p>Amakawa Haruto &ndash; một ch&agrave;ng trai b&igrave;nh thường sinh ra tại thế kỷ XXI, nhưng kh&ocirc;ng may mất mạng trong một vụ tai nạn kinh ho&agrave;ng.</p>\r\n\r\n<p>Rio &ndash; một cậu b&eacute; ở thế giới kh&aacute;c, đang ng&agrave;y đ&ecirc;m sinh tồn trong một khu &ocirc; chuột h&ocirc;i h&aacute;m v&agrave; bẩn thỉu.</p>\r\n\r\n<p>Hai mảnh gh&eacute;p tưởng chừng như chẳng hề li&ecirc;n quan đến nhau ấy, bỗng một ng&agrave;y kia lại c&oacute; chung một cuộc đời, một số phận, thậm ch&iacute; l&agrave; cả một sứ mệnh chung</p>\r\n\r\n<p>Năm Haruto học năm thứ ba đại học, một tai nạn xe bỗng đổ ập xuống v&agrave; cướp đi mạng sống của cậu. Nhưng khi mở mắt ra lần nữa, Haruto đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; m&igrave;nh, m&agrave; trở th&agrave;nh một cậu nh&oacute;c 7 tuổi t&ecirc;n &ldquo;Rio&rdquo;. Xung quanh cậu l&agrave; một thế giới xa lạ, một khu ổ chuột với đủ hạng người &ndash; nơi m&agrave; Rio đang phải đấu tranh để gi&agrave;nh giật lại mạng sống từng ng&agrave;y từng giờ.</p>\r\n\r\n<p>Một người sẽ ra sao khi c&oacute; tận hai nh&acirc;n c&aacute;ch kh&aacute;c nhau c&ugrave;ng hai d&ograve;ng k&yacute; ức t&aacute;ch biệt?</p>\r\n\r\n<p>Một Rio lu&ocirc;n lu&ocirc;n th&ugrave; hận kẻ đ&atilde; giết chết mẹ m&igrave;nh v&agrave; một Haruto lu&ocirc;n t&acirc;m niệm về người bạn thời thơ ấu liệu c&oacute; thể chung sống h&ograve;a hợp trong một cơ thể?</p>\r\n\r\n<p>Trong l&uacute;c vẫn c&ograve;n đang m&ocirc;ng lung trước th&acirc;n phận của m&igrave;nh, Rio lại bị vướng v&agrave;o vụ bắt c&oacute;c một b&eacute; g&aacute;i v&agrave; ph&aacute;t&nbsp; hiện ra năng lực kh&ocirc;ng ngờ của bản th&acirc;n. Thế nhưng b&eacute; g&aacute;i m&agrave; cậu cứu lại l&agrave; một c&ocirc; c&ocirc;ng ch&uacute;a?!</p>\r\n\r\n<p>Điều g&igrave; đang chờ đợi Rio ở ph&iacute;a trước?</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:43:44', '2019-05-09 01:43:44'),
(19, 9, 1, 200, 2016, '<p>Nhằm cung cấp cho bạn đọc có thêm tài liệu nghiên cứu, tìm hiểu sâu sắc hơn về nền tảng tư tưởng của Đảng, lịch sử, truyền thống cách mạng, những vấn đề lý luận và thực tiễn về sự nghiệp đổi mới, hội nhập và phát triển đất nước, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản cuốn sách Một số vấn đề lý luận và thực tiễn về đổi mới, phát triển đất nước của GS.TS. Nguyễn Xuân Thắng, Ủy viên Bộ Chính trị, Chủ tịch Hội đồng Lý luận Trung ương, Giám đốc Học viện Chính trị quốc gia Hồ Chí Minh.\n\nCuốn sách Một số vấn đề lý luận và thực tiễn về đổi mới, phát triển đất nước là tài liệu quý, có giá trị lý luận và thực tiễn sâu sắc, giúp các cấp ủy, tổ chức đảng các cấp, đảng viên quán triệt sâu sắc hơn nền tảng tư tưởng, lý luận của Đảng ta, chính sách, pháp luật của Nhà nước, những vấn đề lý luận và thực tiễn gần 40 năm đổi mới; giáo dục truyền thống yêu nước và đạo đức cách mạng, tinh thần trách nhiệm của cán bộ, đảng viên và nhân dân trong sự nghiệp xây dựng, phát triển đất nước và bảo vệ Tổ quốc Việt Nam xã hội chủ nghĩa “dân giàu, nước mạnh, dân chủ, công bằng, văn minh”.\n\nTrân trọng giới thiệu cuốn sách với bạn đọc.</p>', '14.5 x 20.5 cm', '700', '2016-02-14', '2019-05-09 01:23:45', '2019-05-09 01:23:45'),
(20, 11, 1, 205, 2018, '<p>Tham nhũng là hiện tượng xã hội tiêu cực tồn tại ở nhiều quốc gia trên thế giới, gây thiệt hại nghiêm trọng đến các nguồn lực công, đến hoạt động của bộ máy nhà nước, làm suy giảm niềm tin, cản trở sự phát triển của đất nước, xã hội. Do vậy, công tác phòng, chống tham nhũng được Đảng và Nhà nước ta xác định là nhiệm vụ quan trọng, thường xuyên, vừa cấp bách, vừa khó khăn, phức tạp, lâu dài với tổng thể các biện pháp phòng, chống tham nhũng, trong đó kiểm soát tài sản, thu nhập của người có chức vụ, quyền hạn luôn là giải pháp trọng tâm để “không thể” tham nhũng. Qua đó, sẽ giải quyết triệt để từ gốc rễ, sẽ ngăn chặn sự hình thành của tài sản phi pháp, phát hiện truy vết và thu hồi tài sản tham nhũng. Các vụ việc tham nhũng được nhận diện và xử lý thời gian qua cho thấy, chủ thể tham nhũng phần nhiều là đảng viên, đặc biệt là đảng viên là người có chức vụ, quyền hạn trong hệ thống chính trị. Vì vậy, nếu kiểm soát tài sản, thu nhập của đảng viên là người có chức vụ, quyền hạn hiệu quả sẽ là giải pháp mạnh trong phòng, chống tham nhũng, tiêu cực ở Việt Nam.\n\nTrong bối cảnh toàn Đảng, toàn dân và toàn quân đang triển khai thực hiện thắng lợi Nghị quyết Đại hội đại biểu toàn quốc lần thứ XIII của Đảng trong đó có nhiệm vụ phòng, chống tham nhũng, làm trong sạch bộ máy, xây dựng nhà nước liêm chính, kiến tạo, hoạt động hiệu lực, hiệu quả, việc bảo đảm kiểm soát tài sản, thu nhập của đảng viên là người có chức vụ, quyền hạn, góp phần bảo đảm thu hồi tài sản tham nhũng và nâng cao hiệu quả phòng, chống tham nhũng, tiêu cực, lãng phí là yêu cầu cấp thiết cả về lý luận và thực tiễn.\n\n\nNhằm giới thiệu đến bạn đọc một tài liệu tham khảo có giá trị về vấn đề trên, Nhà xuất bản Chính trị quốc gia Sự thật xuất bản cuốn sách Kiểm soát tài sản, thu nhập của đảng viên là người có chức vụ, quyền hạn trong bối cảnh mới ở Việt Nam (Sách chuyên khảo) do PGS.TS. Nguyễn Thị Báo làm chủ biên.\n\n\nXin trân trọng giới thiệu cuốn sách với bạn đọc.</p>', '14.5 x 20.5 cm', '320', '2018-11-17', '2019-05-09 01:33:22', '2019-05-09 01:33:22'),
(21, 12, 1, 205, 2018, '<p>Ch&agrave;ng trai 17 tuổi năm ấy bạn từng y&ecirc;u...</p>\r\n\r\n<p>L&agrave; người đ&atilde; bước đi b&ecirc;n cạnh bạn một qu&atilde;ng đường vừa đủ nhưng ngập tr&agrave;n hạnh ph&uacute;c v&agrave; b&igrave;nh y&ecirc;n. L&agrave; người c&ugrave;ng bạn trốn học hay ki&ecirc;n tr&igrave; chở bạn đi tr&ecirc;n chiếc xe đạp cũ kĩ. L&agrave; người sẵn s&agrave;ng nhịn ăn s&aacute;ng để d&agrave;nh tiền mua cho bạn chiếc cặp t&oacute;c mới. L&agrave; mối t&igrave;nh đầu trong s&aacute;ng nhất trong cuộc đời.</p>\r\n\r\n<p>Ch&agrave;ng trai 17 tuổi năm ấy bạn từng y&ecirc;u...</p>\r\n\r\n<p>L&agrave; người m&agrave; cả đời n&agrave;y bạn sẽ kh&ocirc;ng bao giờ qu&ecirc;n nhưng chẳng thể n&agrave;o đi c&ugrave;ng bạn tới suốt cuộc đời. D&ugrave; cả hai đ&atilde; c&ugrave;ng nhau trải qua thời thanh xu&acirc;n ng&ocirc;ng cuồng tươi đẹp như thế, ở b&ecirc;n nhau v&agrave;o những ng&agrave;y th&aacute;ng học h&agrave;nh thi cử khổ sở nhất như thế. Nhưng sau n&agrave;y lại kh&ocirc;ng thể ở b&ecirc;n nhau nữa.</p>\r\n\r\n<p>&quot;Cảm ơn cậu đ&atilde; xuất hiện v&agrave; ở b&ecirc;n tớ trong những ng&agrave;y th&aacute;ng thanh xu&acirc;n đẹp nhất. D&ugrave; sau n&agrave;y, ch&uacute;ng m&igrave;nh chẳng thể c&ugrave;ng nhau đi đến cuối con đường.</p>\r\n\r\n<p>Tớ nhớ t&oacute;c cậu rất mềm, khi cậu cười sẽ c&oacute; một c&aacute;i l&uacute;m đồng tiền nho nhỏ ở m&aacute; phải, cậu c&oacute; một c&aacute;i m&aacute;y nghe nhạc cũ m&agrave;u xanh l&aacute; c&acirc;y, th&iacute;ch ăn b&aacute;nh bao v&agrave;o buổi s&aacute;ng... Khi nhớ được một điều, những điều kh&aacute;c thuộc về cậu cũng nối đu&ocirc;i nhau xuất hiện, khiến tớ kh&ocirc;ng khỏi cười thầm. Th&igrave; ra ng&agrave;y xưa tớ để &yacute; cậu ấy nhiều đến nỗi như đ&atilde; học thuộc l&ograve;ng ch&uacute;ng.</p>\r\n\r\n<p>Thanh xu&acirc;n của mỗi người trong ch&uacute;ng ta, ai cũng đ&atilde; đều bỏ lỡ một ai đ&oacute;. Bởi v&igrave; v&agrave;o những năm th&aacute;ng ngốc nghếch trẻ dại ấy, ch&uacute;ng ta c&ograve;n chưa biết c&aacute;ch y&ecirc;u một người, chưa học được c&aacute;ch tr&acirc;n trọng. Nhưng tớ rất muốn hỏi một c&acirc;u tại sao lại l&agrave; người ấy lại l&agrave; cậu?&quot;</p>', '14.5 x 20.5 cm', '320', '2018-11-20', '2019-05-09 01:34:09', '2019-05-09 01:34:09'),
(22, 13, 1, 220, 2017, '<p>C&oacute; những gia đ&igrave;nh kh&ocirc;ng trọn vẹn, cha mẹ Giờ Ph&uacute;t v&agrave; Giờ Gi&acirc;y chia tay nhau, rốt cục khiến 2 đứa trẻ chỉ c&ograve;n biết sống nương tựa v&agrave;o nhau. Nhưng bi kịch gia đ&igrave;nh kh&ocirc;ng khiến cho 2 đứa trẻ bi quan ủ dột m&agrave; ngược lại, ch&uacute;ng vẫn tận hưởng niềm vui cuộc sống b&ecirc;n bạn b&egrave; thầy c&ocirc;, v&agrave; c&agrave;ng y&ecirc;u qu&yacute; tr&acirc;n trọng người anh trai/ em g&aacute;i của m&igrave;nh hơn.</p>', '14.5 x 20.5 cm', '320', '2017-11-20', '2019-05-09 01:34:58', '2019-05-09 01:34:58'),
(23, 14, 1, 220, 2017, '<p>C&oacute; những gia đ&igrave;nh kh&ocirc;ng trọn vẹn, cha mẹ Giờ Ph&uacute;t v&agrave; Giờ Gi&acirc;y chia tay</p>\r\n\r\n<p>nhau, rốt cục khiến 2 đứa trẻ chỉ c&ograve;n biết sống nương tựa v&agrave;o nhau.</p>\r\n\r\n<p>Nhưng bi kịch gia đ&igrave;nh kh&ocirc;ng khiến cho 2 đứa trẻ bi quan ủ dột m&agrave; ngược</p>\r\n\r\n<p>lại, ch&uacute;ng vẫn tận hưởng niềm vui cuộc sống b&ecirc;n bạn b&egrave; thầy c&ocirc;, v&agrave; c&agrave;ng</p>\r\n\r\n<p>y&ecirc;u qu&yacute; tr&acirc;n trọng người anh trai/ em g&aacute;i của m&igrave;nh hơn.</p>\r\n\r\n<p><strong>Giới thiệu T&aacute;c giả - Họa sĩ:</strong></p>\r\n\r\n<p>T&aacute;c giả: U Linh</p>\r\n\r\n<p>U* Linh &ndash; Chị em sinh đ&ocirc;i, t&aacute;c giả truyện tranh nổi tiếng.</p>', '14.5 x 20.5 cm', '320', '2018-01-10', '2019-05-09 01:36:14', '2019-05-09 01:36:14'),
(24, 15, 1, 220, 2017, '<p><em>&ldquo;Việc g&igrave; m&agrave; phải để t&acirc;m đến những g&igrave; người kh&aacute;c nghĩ?&rdquo;</em>&nbsp;l&agrave; một trong v&agrave;i nguy&ecirc;n tắc sống của Joris Terlinck, vi&ecirc;n thị trưởng lạnh l&ugrave;ng, chuy&ecirc;n quyền, một người lu&ocirc;n gieo rắc quanh m&igrave;nh sợ h&atilde;i v&agrave; nước mắt. Nhưng cũng c&ugrave;ng người đ&agrave;n &ocirc;ng ấy, một ng&agrave;y kia, lại bắt đầu thay đổi. Chẳng ai c&oacute; thể nhận ra vi&ecirc;n thị trưởng xưa nữa&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Viết c&acirc;u chuyện người đ&agrave;n &ocirc;ng miệng l&uacute;c n&agrave;o cũng ngậm x&igrave; g&agrave; ấy, Georges Simenon đ&atilde; ghi t&ecirc;n m&igrave;nh v&agrave;o danh s&aacute;ch (rất d&agrave;i) chủ nh&acirc;n c&aacute;c t&aacute;c phẩm nghệ thuật lấy h&igrave;nh tượng &ldquo;vi&ecirc;n thị trưởng&rdquo; của những th&agrave;nh phố miền Bắc ch&acirc;u &Acirc;u lục địa l&agrave;m nh&acirc;n vật.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy Simenon hay h&uacute;t tẩu chứ kh&ocirc;ng phải x&igrave; g&agrave;, người ta vẫn nhận ra rất nhiều b&oacute;ng d&aacute;ng ch&iacute;nh &ocirc;ng trong h&igrave;nh ảnh &ldquo;vi&ecirc;n thị trưởng ở Furnes&rdquo; - cuốn tiểu thuyết đồ sộ theo c&aacute;ch ri&ecirc;ng m&agrave; kh&ocirc;ng ai ngo&agrave;i Simenon (vốn dĩ cũng chẳng bao giờ để t&acirc;m tới những g&igrave; người kh&aacute;c nghĩ) nắm được b&iacute; quyết tạo ra.</p>', '14.5 x 20.5 cm', '320', '2018-01-10', '2019-05-09 01:37:27', '2019-05-09 01:37:27'),
(25, 26, 1, 150, 2019, '<p>Thanh xu&acirc;n đ&oacute;, họ gặp nhau...</p>\r\n\r\n<p>Một mối t&igrave;nh học tr&ograve; trong s&aacute;ng giữa hai người bạn chung b&agrave;n, chung lớp nảy nở tựa như những đ&oacute;a hoa th&aacute;ng tư...</p>\r\n\r\n<p>Người ta vẫn n&oacute;i t&igrave;nh y&ecirc;u học tr&ograve; thường mong manh, khi chưa ai đủ trưởng th&agrave;nh để bảo vệ t&igrave;nh y&ecirc;u, v&agrave; cũng kh&ocirc;ng đủ ki&ecirc;n định đi c&ugrave;ng nhau đến cuối h&agrave;nh tr&igrave;nh...</p>\r\n\r\n<p>T&igrave;nh y&ecirc;u tuổi học tr&ograve;, mạnh mẽ nhưng phải vụng về giấu k&iacute;n...</p>\r\n\r\n<p>C&oacute; khi rực rỡ như nắng s&acirc;n trường, c&oacute; l&uacute;c buồn b&atilde; như ng&agrave;y ướt mưa...</p>\r\n\r\n<p>Biết bao s&oacute;ng gi&oacute;, biết bao c&aacute;ch trở khiến c&ocirc; nghĩ rằng &quot;ch&agrave;ng trai năm ấy&quot; m&atilde;i chỉ l&agrave; người trong mộng.</p>\r\n\r\n<p>Chỉ m&igrave;nh anh chứng minh điều ngược lại, kẻ cứng đầu như anh, khi đ&atilde; phải l&ograve;ng một người năm mười s&aacute;u tuổi, cả cuộc đời sẽ chỉ chọn ở b&ecirc;n người đ&oacute;...</p>\r\n\r\n<p>&quot;Thời ni&ecirc;n thiếu ch&uacute;ng ta mắc biết bao lỗi lầm. Nhưng nhiều năm sau nhớ lại, mới biết th&aacute;ng năm hoa mộng ấy sao m&agrave; đẹp đẽ, tựa như ngọn đ&egrave;n s&aacute;ng l&ecirc;n trong cơn mưa đ&ecirc;m. Tuổi xu&acirc;n của mỗi người con g&aacute;i đều mong ước c&oacute; được một người con trai như thế - một người lu&ocirc;n bảo vệ v&agrave; y&ecirc;u thương m&igrave;nh v&ocirc; điều kiện, phải kh&ocirc;ng?&quot;</p>\r\n\r\n<p>Người L&agrave; Th&aacute;ng Tư Của Thế Gian&nbsp;- Một c&acirc;u chuyện về t&igrave;nh y&ecirc;u v&agrave; những th&aacute;ng ng&agrave;y thanh xu&acirc;n m&agrave; ch&uacute;ng ta ai cũng đ&atilde; một lần nếm trải...</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:44:31', '2019-05-09 01:44:31'),
(26, 36, 1, 120, 2019, '<p>Một cuốn s&aacute;ch rung động tận t&acirc;m can về giai đoạn lịch sử hưng vong của Trung Nguy&ecirc;n, một kh&uacute;c chiến ca thời loạn trải quả mười năm d&agrave;i đằng đẵng. Thi&ecirc;n hạ ngập kh&oacute;i&nbsp; lửa, non s&ocirc;ng bị t&agrave;n ph&aacute;, vương đạo ở ngay trong l&ograve;ng mỗi người.</p>\r\n\r\n<p>Liệu với đại nghĩa v&agrave; th&acirc;m t&igrave;nh, con người ta c&oacute; thể chiến thắng mọi kh&oacute; khăn.</p>\r\n\r\n<p><strong>Tập 1</strong></p>\r\n\r\n<p>Vốn l&agrave; một cậu ấm mười s&aacute;u tuổi ăn sung mặc sướng, trước gia cảnh đột ngột thay đổi, Du Diểu chỉ c&ograve;n mỗi sơn trang hoang vu do người mẹ qu&aacute; cố để lại v&agrave; người n&ocirc; bộc Khuyển Nhung rất mực trung th&agrave;nh. Ho&agrave;n cảnh kh&oacute; khăn quẫn b&aacute;ch khi lập nghiệp từ hai b&agrave;n tay trắng đ&atilde; trở th&agrave;nh thử th&aacute;ch lớn lao đầu ti&ecirc;n trong đời cậu...</p>\r\n\r\n<p><strong>Tập 2</strong></p>\r\n\r\n<p>Đến kỳ khoa cử, Du Diểu v&agrave;o kinh dự thi, ngờ đ&acirc;u bộ tộc phương Bắc x&acirc;m lược, thế như chẻ tre đ&aacute;nh thẳng xuống ph&iacute;a Nam, người H&aacute;n ồ ạt chạy nạn, kh&oacute;i lửa bốn bề, nước mất nh&agrave; tan, lang thang phi&ecirc;u bạt kh&ocirc;ng chốn lương th&acirc;n...</p>\r\n\r\n<p><strong>Tập 3</strong></p>\r\n\r\n<p>Du Hiểu v&agrave; c&aacute;c huynh đệ kết nghĩa vượt qua cảnh ngộ lưu lạc c&ugrave;ng khốn, về đến Giang Nam dốc hết sức lực gầy dựng nửa mảnh giang sơn đ&atilde; bị gi&agrave;y x&eacute;o dưới g&oacute;t sắt qu&acirc;n th&ugrave;...</p>', '14.5 x 20.5 cm', '800', '2019-02-20', '2019-05-09 01:52:20', '2019-05-09 01:52:20'),
(27, 27, 1, 100, 2019, '<p>Kaizaki Arata, 27 tuổi, thất nghiệp, ch&aacute;n nản với cuộc đời. T&igrave;nh cờ trong một lần say xỉn, anh trở th&agrave;nh đối tượng th&iacute; nghiệm của dự &aacute;n mang t&ecirc;n&nbsp;ReLIFE, bị thu nhỏ về h&igrave;nh dạng của một học sinh cao trung 17 tuổi, từ đ&oacute; bắt đầu h&agrave;nh tr&igrave;nh học lại kỹ năng sống, l&agrave;m lại cuộc đời.</p>\r\n\r\n<p><strong>Giới thiệu T&aacute;c giả - Họa sĩ:</strong></p>\r\n\r\n<p><strong>YAYOISO &ndash;&nbsp;</strong>T&aacute;c giả c&oacute; lượng view cao nhất web đọc truyện online COMICO, với t&aacute;c phẩm đ&atilde; được chuyển thể th&agrave;nh phim hoạt h&igrave;nh, phim điện ảnh v&agrave; tiểu thuyết.</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:45:04', '2019-05-09 01:45:04'),
(28, 28, 1, 100, 2019, '<p>D&ugrave; chưa phải ho&agrave;n to&agrave;n, Chise đ&atilde; c&oacute; thể chấp nhận con người Elias v&agrave; cả bản th&acirc;n c&ocirc;.</p>\r\n\r\n<p>Khi Cartaphilus ch&igrave;m v&agrave;o giấc ngủ d&agrave;i v&agrave; Chise lấy lại được b&igrave;nh tĩnh, &ldquo;Học viện&rdquo; - nơi c&aacute;c thuật sĩ hỗ trợ lẫn nhau - đ&atilde; gửi đến c&ocirc; lời mời nhập học&hellip;</p>\r\n\r\n<p>S&acirc;u b&ecirc;n dưới Thư viện Anh, tr&ecirc;n một s&acirc;n khấu mới, c&acirc;u chuyện mới mở m&agrave;n.</p>\r\n\r\n<p>Con người học hỏi, ngẫm nghĩ, v&agrave; dần trưởng th&agrave;nh&hellip; C&ograve;n phi nh&acirc;n th&igrave; sao?</p>', '14.5 x 20.5 cm', '350', '2019-03-16', '2019-05-09 01:45:49', '2019-05-09 01:45:49'),
(29, 37, 1, 120, 2019, '<p>Trận chiến với The Guild kết th&uacute;c, c&ocirc;ng ty th&aacute;m tử cũng tạm thời đ&igrave;nh chiến với mafia.</p>\r\n\r\n<p>Atsushi tiếp nhận điều tra một vụ tai nạn giao th&ocirc;ng, Kunikida th&igrave; bị cuốn v&agrave;o một vụ đ&aacute;nh bom v&agrave; phải đối mặt với cuộc sống khắc nghiệt v&igrave; l&yacute; tưởng.</p>\r\n\r\n<p>Người bạn từng l&agrave;m trong c&ocirc;ng ty th&aacute;m tử của Kunikida, n&agrave;ng &ldquo;tiểu thư t&oacute;c đen&rdquo;, ban l&atilde;nh đạo Port Mafia, c&ugrave;ng nhiều nh&acirc;n vật kh&aacute;c bắt đầu rục rịch. Trong khi đ&oacute;, &ldquo;con quỷ&rdquo; Dostoevsky người Nga &acirc;m thầm h&agrave;nh động&hellip;</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:53:00', '2019-05-09 01:53:00'),
(30, 38, 1, 120, 2019, '<p>Kh&ocirc;ng đi t&igrave;m chết th&igrave; ắt kh&ocirc;ng chết.</p>\r\n\r\n<p>Trước lời tỏ t&igrave;nh phạm quy &ldquo;chỉ cho ph&eacute;p nghe kh&ocirc;ng cho ph&eacute;p từ chối&rdquo; của Tu, Đỗ Trạch liền biết d&ugrave; m&igrave;nh c&oacute; đi t&igrave;m chết hay kh&ocirc;ng th&igrave; cũng chết chắc rồi.</p>\r\n\r\n<p>Thần &Aacute;nh s&aacute;ng đ&atilde; m&ograve; đến tận cửa, tay phải muốn về nh&agrave;, tay tr&aacute;i lại muốn nh&acirc;n vật ch&iacute;nh.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; định &eacute;p chết độc giả phải kh&ocirc;ng?</p>\r\n\r\n<p>Mới trải nghiệm ch&acirc;n t&igrave;nh, ngay cả Thần cũng kh&ocirc;ng ngăn được.</p>\r\n\r\n<p>Thuộc t&iacute;nh &ldquo;ngựa đực&rdquo; đ&atilde; gi&aacute;c ngộ, y&ecirc;u đương đa chủng tộc c&aacute;i n&agrave;y c&aacute;i n&agrave;y c&aacute;i n&agrave;y&hellip;</p>\r\n\r\n<p>T&aacute;c giả, tiết th&aacute;o của &ocirc;ng đ&acirc;u rồi!? Tiểu sinh thật sự kh&ocirc;ng chịu nổi!</p>\r\n\r\n<p>Cậu, l&agrave; anti-fan hại nh&acirc;n vật ch&iacute;nh rơi v&agrave;o cảnh ngộ th&ecirc; thảm.</p>\r\n\r\n<p>Cậu, l&agrave; fan cuồng ngốc nghếch ch&acirc;n th&agrave;nh y&ecirc;u nh&acirc;n vật ch&iacute;nh.</p>\r\n\r\n<p>Nh&acirc;n vật ch&iacute;nh &ldquo;Hỗn Huyết&rdquo; đang dần dần thức tỉnh, bạn độc giả xuy&ecirc;n kh&ocirc;ng đang dần dần lạc hướng.</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:53:44', '2019-05-09 01:53:44'),
(31, 39, 1, 120, 2019, '<p><em>Owen giải th&iacute;ch: &ldquo;Marie l&agrave; nữ gi&uacute;p việc người Singapore, Isaac l&agrave; con vẹt, Albert l&agrave; con c&aacute; nhiệt đới.&rdquo;</em></p>\r\n\r\n<p><em>Ch&acirc;n &Aacute;i kh&ocirc;ng thể tin được, &ldquo;Anh d&ugrave;ng t&ecirc;n của Einstein v&agrave; Newton đặt t&ecirc;n cho th&uacute; cưng sao?&rdquo;</em></p>\r\n\r\n<p><em>&ldquo;D&ugrave; t&ocirc;i đ&aacute;nh gi&aacute; cao c&ocirc; đ&atilde; nh&igrave;n ra xuất xứ t&ecirc;n c&aacute;c c&ocirc; n&agrave;ng nhưng t&ocirc;i kh&ocirc;ng th&iacute;ch th&aacute;i độ của c&ocirc; với ch&uacute;ng.&rdquo; Ng&ocirc;n Tố ki&ecirc;u căng hất cằm, rất bất m&atilde;n. &ldquo;Albert l&agrave; con c&aacute; nhiệt đới rất th&ocirc;ng minh, c&ograve;n Isaac thuộc được ba định luật Newton bằng tiếng Anh, khẩu &acirc;m quận Devon nước Anh. C&ograve;n nữa, n&oacute; rất th&iacute;ch ăn t&aacute;o.&rdquo;</em></p>\r\n\r\n<p><em>Ch&acirc;n &Aacute;i gật đầu: &ldquo;Anh chọn Marie l&agrave;m nữ gi&uacute;p việc kh&ocirc;ng phải v&igrave; t&ecirc;n c&ocirc; ấy giống với Marie Cuirie chứ?&rdquo;</em></p>\r\n\r\n<p><em>Ng&ocirc;n Tố nheo mắt nh&igrave;n c&ocirc; hồi l&acirc;u, m&iacute;m m&ocirc;i: &ldquo;C&ocirc; th&ocirc;ng minh hơn t&ocirc;i tưởng. OK, c&ocirc; c&oacute; thể t&aacute; t&uacute;c ở nh&agrave; t&ocirc;i.&rdquo;</em></p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:54:06', '2019-05-09 01:54:06'),
(32, 29, 1, 220, 2017, '<p>T&ocirc; Căng Bắc- MC, diễn vi&ecirc;n nổi tiếng đi l&ecirc;n nhờ thực lực, từ fan h&acirc;m mộ cho đến người trong giới đều kh&ocirc;ng hay biết c&ocirc; vốn l&agrave; tiểu thư nh&agrave; họ T&ocirc; danh tiếng lẫy lừng ở phương nam.</p>\r\n\r\n<p>Đại minh tinh T&ocirc; l&agrave; người như thế n&agrave;o? C&ocirc; ch&iacute;nh l&agrave; một người c&oacute; niềm đam m&ecirc; v&ocirc; hạn với c&aacute;i đẹp, bao gồm cả&hellip; trai đẹp. Trong một lần gi&uacute;p nam thần m&agrave; c&ocirc; đang m&ecirc; mẩn dạo gần đ&acirc;y chạy trốn khỏi đ&aacute;m ph&oacute;ng vi&ecirc;n săn tin. T&ocirc; Căng Bắc xui xẻo gặp tai nạn giao th&ocirc;ng v&agrave; phải nằm viện hai th&aacute;ng. Kh&ocirc;ng ngờ bước ngoặt n&agrave;y lại dẫn đến cuộc gặp gỡ định mệnh giữa c&ocirc; với Chu Thời Uẩn- b&aacute;c sĩ trị liệu cho c&ocirc; v&agrave; cũng ch&iacute;nh l&agrave; vị h&ocirc;n phu được gia đ&igrave;nh mai mối, người&nbsp; m&agrave; T&ocirc; Căng Bắc kh&ocirc;ng th&egrave;m để &yacute; suốt hai mươi năm qua, thậm ch&iacute; c&ograve;n căm gh&eacute;t đến tận xương tủy v&igrave; d&aacute;m bỏ rơi c&ocirc; trong h&ocirc;n lễ.</p>\r\n\r\n<p>Từ đ&acirc;y, trong l&ograve;ng T&ocirc; Căng Bắc, những anh ch&agrave;ng đẹp trai ngời ngời ngo&agrave;i kia đều chẳng thể s&aacute;nh được với b&aacute;c sĩ Chu lạnh l&ugrave;ng, cao ngạo nh&agrave; c&ocirc; nữa&hellip;&rdquo;</p>\r\n\r\n<p>Tr&iacute;ch đoạn:</p>\r\n\r\n<p>-------------</p>\r\n\r\n<p>Ph&oacute;ng vi&ecirc;n: Ưu điểm lớn nhất của chồng c&ocirc; l&agrave; g&igrave;?</p>\r\n\r\n<p>T&ocirc; Căng Bắc: Đẹp trai, nhiều tiền, sống tốt.</p>\r\n\r\n<p>Ph&oacute;ng vi&ecirc;n: Sống&hellip; sống tốt?</p>', '14.5 x 20.5 cm', '500', '2017-02-16', '2019-05-09 01:46:40', '2019-05-09 01:46:40'),
(33, 40, 1, 120, 2019, '<p><strong>1.</strong>&nbsp;<strong>Tập 9A: Hắc Thủy Nộ Y&ecirc;u</strong></p>\r\n\r\n<p>Để điều tra manh mối Kh&ocirc; Diệp để lại, Triển Chi&ecirc;u Bạch Ngọc Đường c&ugrave;ng mọi người tr&ugrave;ng tr&ugrave;ng điệp điệp đến Đại L&yacute;.</p>\r\n\r\n<p>Kh&ocirc;ng ngờ vừa xuống thuyền đ&atilde; c&oacute; người chỉ v&agrave;o Triển Chi&ecirc;u m&agrave; h&ocirc; &ldquo;M&egrave;o tinh&rdquo;!</p>\r\n\r\n<p>Ma nữ &aacute;o đỏ kh&ocirc;ng ngừng xuất hiện, lại th&ecirc;m lời nguyền diệt m&ocirc;n quỷ dị, Nộ Y&ecirc;u h&igrave;nh ch&oacute; ba đầu, căn nh&agrave; ma với v&ocirc; số thi thể bị ch&ocirc;n v&ugrave;i b&ecirc;n dưới&hellip;</p>\r\n\r\n<p>Mọi người c&ograve;n chưa kịp ổn định chỗ ở đ&atilde; bị y&ecirc;u ma quỷ qu&aacute;i lũ lượt k&eacute;o đến l&agrave;m to&aacute;t mồ h&ocirc;i lạnh.</p>\r\n\r\n<p>Trước mặt Bạch Ngọc Đường, cơ quan tinh xảo đến mấy cũng sẽ lộ sơ hở.</p>\r\n\r\n<p>Nhưng, tại sao chỉ m&igrave;nh Triển Chi&ecirc;u thấy được ma nữ &aacute;o đỏ?</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:54:45', '2019-05-09 01:54:45'),
(34, 30, 1, 100, 2017, '<p>Sau khi gặp Misa, tức &ldquo;Kira thứ hai&rdquo;, Raito l&ecirc;n kế hoạch lợi dụng đ&ocirc;i mắt tử thần để x&oacute;a sổ L. Nhưng tổ điều tra bắt giữ Misa v&igrave; t&igrave;nh nghi l&agrave; Kira thứ hai. Bước tới đường c&ugrave;ng, Raito tự nguyện để bị giam giữ! Cuối c&ugrave;ng cậu tuy&ecirc;n bố với Ryuk từ bỏ cuốn sổ tử thần. Rốt cuộc Raito đang suy t&iacute;nh điều g&igrave;&hellip;? Trong khi đ&oacute;, một Kira mới bắt đầu h&agrave;nh động trong b&oacute;ng tối. Raito được thả để điều tra c&ugrave;ng L trong t&igrave;nh trạng hai người c&ograve;ng tay v&agrave;o nhau. Họ x&aacute;c định Kira mới thuộc tập đo&agrave;n Yotsuba v&agrave; phạm vi nghi ngờ thu hẹp c&ograve;n 8 nh&acirc;n vật. Ch&acirc;n tướng sự việc sắp bắt đầu h&eacute; lộ!</p>', '14.5 x 20.5 cm', '300', '2017-02-16', '2019-05-09 01:47:31', '2019-05-09 01:47:31'),
(35, 41, 1, 120, 2019, '<p>&nbsp;- qu&agrave; tặng k&egrave;m 1&nbsp; postcard</p>\r\n\r\n<p>&nbsp;1huy hiệu random</p>\r\n\r\n<p>&nbsp; 6 trang m&agrave;u</p>\r\n\r\n<p>bọc platis miễn ph&iacute;</p>\r\n\r\n<p>&quot;Tuy hơi đường đột nhưng m&agrave; Kanie kun ơi, c&ugrave;ng đi c&ocirc;ng vi&ecirc;n giải tr&iacute; với t&ocirc;i nh&eacute;?&quot;</p>\r\n\r\n<p>Sento Isuzu - nữ sinh xinh đẹp v&agrave; b&iacute; ẩn vừa chuyển trường đến đưa ra lời mời hẹn h&ograve; với Kanie Seiya tại lớp học sau giờ tan trường. Chuyện được một nữ sinh nổi tiếng ngay từ ng&agrave;y đầu chuyển tới đưa ra lời mời như thế thật sự kh&ocirc;ng tệ. Thế nhưng đ&oacute; l&agrave; chỉ khi cậu kh&ocirc;ng bị d&iacute; một KHẨU S&Uacute;NG HỎA MAI v&agrave;o đầu.</p>\r\n\r\n<p>Miễn cưỡng chấp nhận, nơi cậu được dắt tới l&agrave; &ldquo;Amagi Brilliant Park&rdquo;. Một c&ocirc;ng vi&ecirc;n nổi tiếng như một điểm hẹn h&ograve; tệ hại. Tại đ&oacute; Seiya đ&atilde; được giới thiệu với một n&agrave;ng c&ocirc;ng ch&uacute;a &quot;h&agrave;ng thật&quot; t&ecirc;n Latifa.</p>\r\n\r\n<p>C&ocirc; g&aacute;i đ&oacute; n&oacute;i với cậu rằng: &quot;Em muốn anh trở th&agrave;nh người quản l&yacute; của Amagi Brilliant Park n&agrave;y.&quot;</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:55:21', '2019-05-09 01:55:21'),
(36, 31, 1, 100, 2017, '<p>Đỗ Trạch l&agrave; một t&ecirc;n độc giả anti fan (rởm), ch&iacute;nh v&igrave; c&aacute;i l&yacute; luận trai kh&ocirc;ng hư g&aacute;i kh&ocirc;ng thương, độc giả kh&ocirc;ng n&eacute;m đ&aacute; t&aacute;c giả kh&ocirc;ng nh&igrave;n thấy.</p>\r\n\r\n<p>T&ecirc;n độc giả ngốc nghếch cuồng t&iacute;n v&agrave;o ch&acirc;n l&yacute; &ldquo;c&agrave;ng y&ecirc;u c&agrave;ng chửi&rdquo;, cứ thế theo d&otilde;i tiểu thuyết d&agrave;i kỳ trong nỗi niềm đau đớn cứ tuần ho&agrave;n hết n&eacute;m đ&aacute; rồi lại bấm phiếu đề cử, bấm phiếu đề cử rồi lại n&eacute;m đ&aacute;&hellip;</p>\r\n\r\n<p>M&agrave; h&ocirc;m nay, một b&igrave;nh luận n&eacute;m đ&aacute; Đỗ Trạch gửi cho t&aacute;c phẩm mới &ldquo;Hỗn Huyết&rdquo; của t&aacute;c giả, kh&ocirc;ng ngờ lại để t&aacute;c giả đọc được!</p>\r\n\r\n<p>Kể từ đ&oacute;, nh&acirc;n vật ch&iacute;nh tươi s&aacute;ng ngời ngời &ndash; Tu &ndash; từ một thiếu ni&ecirc;n thi&ecirc;n t&agrave;i của học viện ph&eacute;p thuật tức khắc thức tỉnh d&ograve;ng m&aacute;u Undead, biến th&agrave;nh một bộ xương trắng ởn một c&aacute;ch thần kỳ!</p>\r\n\r\n<p>T&ecirc;n độc giả anti fan ngốc nghếch liền tức &oacute;i m&aacute;u&hellip;</p>\r\n\r\n<p>T&aacute;c! Giả! Anh! Thắng! Rồi!</p>\r\n\r\n<p>Bất ngờ hơn c&ograve;n ở ph&iacute;a sau.</p>\r\n\r\n<p>Chủ h&agrave;ng nơi Đỗ Trạch mua s&aacute;ch đ&atilde; gửi nhầm cuốn đồng nh&acirc;n cao H của &ldquo;Hỗn Huyết&rdquo; cho cậu, v&agrave; thế l&agrave; Đỗ Trạch &ndash; mắt đeo k&iacute;nh cận d&agrave;y cộp, tai đeo m&aacute;y trợ th&iacute;nh &ndash; cứ thế xuy&ecirc;n-kh&ocirc;ng v&agrave;o trong &ldquo;Hỗn Huyết&rdquo; một c&aacute;ch phản khoa học!</p>', '14.5 x 20.5 cm', '300', '2017-02-16', '2019-05-09 01:48:55', '2019-05-09 01:48:55'),
(37, 42, 1, 0, 2019, '<p>&nbsp;c&oacute; quai s&aacute;ch</p>\r\n\r\n<p>khổ 60x80cm</p>\r\n\r\n<p>&nbsp;vảii canvas d&agrave;y</p>\r\n\r\n<p>in 2 mặt</p>\r\n\r\n<p>&nbsp;</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:56:19', '2019-05-09 01:56:19'),
(38, 32, 1, 100, 2017, '<p>Kh&ocirc;ng đi t&igrave;m chết th&igrave; ắt kh&ocirc;ng chết.</p>\r\n\r\n<p>Trước lời tỏ t&igrave;nh phạm quy &ldquo;chỉ cho ph&eacute;p nghe kh&ocirc;ng cho ph&eacute;p từ chối&rdquo; của Tu, Đỗ Trạch liền biết d&ugrave; m&igrave;nh c&oacute; đi t&igrave;m chết hay kh&ocirc;ng th&igrave; cũng chết chắc rồi.</p>\r\n\r\n<p>Thần &Aacute;nh s&aacute;ng đ&atilde; m&ograve; đến tận cửa, tay phải muốn về nh&agrave;, tay tr&aacute;i lại muốn nh&acirc;n vật ch&iacute;nh.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; định &eacute;p chết độc giả phải kh&ocirc;ng?</p>\r\n\r\n<p>Mới trải nghiệm ch&acirc;n t&igrave;nh, ngay cả Thần cũng kh&ocirc;ng ngăn được.</p>\r\n\r\n<p>Thuộc t&iacute;nh &ldquo;ngựa đực&rdquo; đ&atilde; gi&aacute;c ngộ, y&ecirc;u đương đa chủng tộc c&aacute;i n&agrave;y c&aacute;i n&agrave;y c&aacute;i n&agrave;y&hellip;</p>\r\n\r\n<p>T&aacute;c giả, tiết th&aacute;o của &ocirc;ng đ&acirc;u rồi!? Tiểu sinh thật sự kh&ocirc;ng chịu nổi!</p>\r\n\r\n<p>Cậu, l&agrave; anti-fan hại nh&acirc;n vật ch&iacute;nh rơi v&agrave;o cảnh ngộ th&ecirc; thảm.</p>\r\n\r\n<p>Cậu, l&agrave; fan cuồng ngốc nghếch ch&acirc;n th&agrave;nh y&ecirc;u nh&acirc;n vật ch&iacute;nh.</p>', '14.5 x 20.5 cm', '800', '2017-02-16', '2019-05-09 01:49:39', '2019-05-09 01:49:39'),
(39, 43, 1, 130, 2019, '<p><strong>Tập 1</strong></p>\r\n\r\n<p>Ở ng&otilde; Thanh Mộc c&oacute; một tiệm quan t&agrave;i, &ocirc;ng chủ tiệm t&ecirc;n l&agrave; Đồng Thất, t&iacute;nh t&igrave;nh khi&ecirc;m tốn lễ độ, tao nh&atilde; đạm bạc.</p>\r\n\r\n<p>Chỉ c&oacute; điều, tiệm n&agrave;y trước đ&acirc;y c&oacute; tin đồn về quỷ, khiến ai ai đi ngang cũng vừa sợ sệt vừa t&ograve; m&ograve;, đến trẻ con cũng nhịn kh&ocirc;ng được phải tới xem trong tiệm c&oacute; ma quỷ g&igrave; kh&ocirc;ng.</p>\r\n\r\n<p>Chỉ c&oacute; mấy người lớn tuổi nh&igrave;n tiệm quan t&agrave;i đầy k&iacute;nh sợ, v&igrave; bọn họ ch&uacute; &yacute; đến một k&yacute; hiệu nho nhỏ tr&ecirc;n bảng hiệu.</p>\r\n\r\n<p>Truyền thuyết n&oacute;i rằng, c&oacute; một loại người c&oacute; thể nối liền &acirc;m dương&hellip;</p>\r\n\r\n<p>&Ocirc;ng chủ Đồng s&aacute;ng mở cửa b&aacute;n &aacute;o liệm, v&ograve;ng hoa. Đ&ecirc;m đến đ&oacute;ng cửa lại nhận những giao dịch kh&aacute;c.</p>\r\n\r\n<p>Chẳng hạn như kiếm đầu người mất, chẳng hạn như t&igrave;m x&aacute;c dưới s&ocirc;ng.</p>\r\n\r\n<p>Cuộc sống đi lại giữa c&aacute;c chốn thần ti&ecirc;n y&ecirc;u ma quỷ qu&aacute;i của Đồng Thất tưởng chừng sẽ m&atilde;i v&ocirc; vị tr&ocirc;i đi như vậy, cho đến ng&agrave;y Thẩm Trạch xuất hiện, khiến con đường sinh mệnh của cả hai đều rẽ ngoặt sang hướng kh&aacute;c&hellip;</p>\r\n\r\n<p><strong>Tập 2</strong></p>\r\n\r\n<p>Thẩm Trạch t&igrave;nh cờ bắt được một con hạc giấy biết bay, đem n&oacute; tới tiệm quan t&agrave;i để chọc ph&aacute; Đồng Thất. H&agrave;nh động trẻ con n&agrave;y kh&ocirc;ng ngờ lại v&ocirc; t&igrave;nh khiến &ocirc;ng chủ Đồng vốn l&atilde;nh đạm thờ ơ phải d&ugrave;ng đến linh lực của m&igrave;nh m&agrave; &ldquo;gi&aacute;o huấn&rdquo; cậu. Thế rồi, duy&ecirc;n phận giữa hai người cũng từ đ&oacute; m&agrave; bắt đầu.</p>\r\n\r\n<p>L&agrave; người của Đồng gia, Đồng Thất d&ugrave; kh&ocirc;ng muốn cũng buộc phải kế thừa linh lực v&agrave; nhiệm vụ của gia tộc.</p>\r\n\r\n<p>Thế nhưng từ khi gặp Thẩm Trạch, c&ugrave;ng trải qua những vui vẻ hờn giận thường t&igrave;nh chốn nh&acirc;n gian, tất cả những g&igrave; Đồng Thất mong muốn lại chỉ l&agrave; một cuộc sống b&igrave;nh ph&agrave;m an ổn, c&oacute; thể ở b&ecirc;n người kia nh&agrave;n tản suốt đời.</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:56:56', '2019-05-09 01:56:56'),
(40, 33, 1, 120, 2017, '<p>C&oacute; thể, bạn đ&atilde; từng c&oacute; những trải nghiệm k&igrave; lạ nhưng vẫn chưa t&igrave;m ra sự thật.</p>\r\n\r\n<p>C&oacute; thể, bạn đang vướng v&agrave;o một cơn &aacute;c mộng nhưng chẳng c&oacute; c&aacute;ch n&agrave;o tho&aacute;t ra.</p>\r\n\r\n<p>C&oacute; thể, chỉ đơn giản l&agrave; bạn th&iacute;ch những sự kiện b&iacute; ẩn v&agrave; muốn giải m&atilde; ch&uacute;ng.</p>\r\n\r\n<p>C&oacute; thể, bạn khao kh&aacute;t t&igrave;nh y&ecirc;u v&agrave; đang t&igrave;m kiếm định mệnh của đời m&igrave;nh.</p>\r\n\r\n<p>C&oacute; lẽ, tất cả những điều bạn kiếm t&igrave;m, đều ở trong cuốn s&aacute;ch n&agrave;y.</p>\r\n\r\n<p><em>&ldquo;Con người rốt cuộc sợ h&atilde;i điều g&igrave;, lo lắng điều g&igrave;?</em></p>\r\n\r\n<p><em>Đ&acirc;u l&agrave; căn nguy&ecirc;n của nỗi sợ h&atilde;i ấy?&rdquo;</em></p>', '14.5 x 20.5 cm', '360', '2018-02-16', '2019-05-09 01:50:17', '2019-05-09 01:50:17'),
(41, 44, 1, 130, 2019, '<p>&ldquo;Đi n&agrave;o Asuna! Nắm chặt v&agrave;o! Tilnel, xuất ph&aacute;t!&rdquo;</p>\r\n\r\n<p>Tạm biệt nữ kị sĩ b&iacute; ẩn Kizmel thuộc tộc Hắc tinh linh, Kirito v&agrave; Asuna tiến đến tầng tiếp theo. Trải rộng khắp tầng 4 của Aincrad l&agrave; &ldquo;thủy lộ&rdquo;.</p>\r\n\r\n<p>Hai người đ&atilde; xoay xở thế n&agrave;o đ&oacute; để đặt ch&acirc;n l&ecirc;n được một th&agrave;nh phố tạo n&ecirc;n từ v&ocirc; v&agrave;n chiếc thuyền đ&aacute;y bằng m&agrave;u trắng c&oacute; k&iacute;ch cỡ lớn nhỏ kh&aacute;c nhau nổi bồng bềnh tr&ecirc;n mặt hồ. Muốn tự do đi lại ở tầng n&agrave;y, họ bắt buộc phải lấy được một chiếc thuyền đ&aacute;y bằng chuy&ecirc;n d&ugrave;ng cho việc di chuyển.</p>\r\n\r\n<p>Để kiếm nguy&ecirc;n liệu l&agrave;m thuyền, Kirito v&agrave; Asuna phải đối mặt với con gấu lửa khổng lồ Magnatherium! Sau đ&oacute;, ở tầng 4 n&agrave;y, họ đ&atilde; bất ngờ gặp lại một người&hellip;</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:57:35', '2019-05-09 01:57:35');
INSERT INTO `chitietsach` (`id`, `masach`, `mangonngu`, `sotrang`, `namxuatban`, `noidung`, `kichthuoc`, `trongluong`, `ngayphathanh`, `created_at`, `updated_at`) VALUES
(42, 34, 1, 120, 2017, '<p><em>&ldquo;Trong mắt người đ&oacute; nh&igrave;n n&oacute;, c&oacute; kinh ngạc nhưng kh&ocirc;ng sợ h&atilde;i, c&oacute; thương x&oacute;t m&agrave; kh&ocirc;ng gh&eacute;t bỏ. Dần dần, thương x&oacute;t trở th&agrave;nh y&ecirc;u thương, cưng chiều n&oacute;.&rdquo;</em></p>\r\n\r\n<p>Người t&agrave;i đến mấy cũng kh&ocirc;ng thể chống lại thi&ecirc;n tai nh&acirc;n họa.</p>\r\n\r\n<p>Để cha kh&ocirc;ng phải ra ngo&agrave;i cướp tiền về nu&ocirc;i gia đ&igrave;nh, Trương B&igrave;nh vốn &ocirc;m mộng th&agrave;nh thi&ecirc;n hạ đệ nhất cao thủ tự nguyện v&agrave;o cung l&agrave;m th&aacute;i gi&aacute;m.</p>\r\n\r\n<p>Một ho&agrave;ng tử m&agrave; lại gầy như bộ xương kh&ocirc;, đ&acirc;y l&agrave; ấn tượng đầu ti&ecirc;n của y về Ho&agrave;ng Phủ Kiệt.</p>\r\n\r\n<p>Một ho&agrave;ng tử m&agrave; lại quỳ xuống trước mặt th&aacute;i gi&aacute;m v&ocirc; phẩm, cả người đầy vết thương&hellip;</p>\r\n\r\n<p>Kh&ocirc;ng phải chỉ xấu hơn, lạ hơn người thường một ch&uacute;t th&ocirc;i sao? Xấu x&iacute; th&igrave; kh&ocirc;ng phải con người &agrave;?</p>\r\n\r\n<p>Hừ, Trương B&igrave;nh ta quyết định rồi, ta sẽ bồi dưỡng ra thi&ecirc;n hạ đệ nhị trong ho&agrave;ng cung n&agrave;y!</p>', '14.5 x 20.5 cm', '800', '2018-02-16', '2019-05-09 01:51:05', '2019-05-09 01:51:05'),
(43, 35, 1, 120, 2019, '<p>Một cuốn s&aacute;ch rung động tận t&acirc;m can về giai đoạn lịch sử hưng vong của Trung Nguy&ecirc;n, một kh&uacute;c chiến ca thời loạn trải quả mười năm d&agrave;i đằng đẵng. Thi&ecirc;n hạ ngập kh&oacute;i&nbsp; lửa, non s&ocirc;ng bị t&agrave;n ph&aacute;, vương đạo ở ngay trong l&ograve;ng mỗi người.</p>\r\n\r\n<p>Liệu với đại nghĩa v&agrave; th&acirc;m t&igrave;nh, con người ta c&oacute; thể chiến thắng mọi kh&oacute; khăn.</p>\r\n\r\n<p><strong>Tập 1</strong></p>\r\n\r\n<p>Vốn l&agrave; một cậu ấm mười s&aacute;u tuổi ăn sung mặc sướng, trước gia cảnh đột ngột thay đổi, Du Diểu chỉ c&ograve;n mỗi sơn trang hoang vu do người mẹ qu&aacute; cố để lại v&agrave; người n&ocirc; bộc Khuyển Nhung rất mực trung th&agrave;nh. Ho&agrave;n cảnh kh&oacute; khăn quẫn b&aacute;ch khi lập nghiệp từ hai b&agrave;n tay trắng đ&atilde; trở th&agrave;nh thử th&aacute;ch lớn lao đầu ti&ecirc;n trong đời cậu...</p>\r\n\r\n<p><strong>Tập 2</strong></p>\r\n\r\n<p>Đến kỳ khoa cử, Du Diểu v&agrave;o kinh dự thi, ngờ đ&acirc;u bộ tộc phương Bắc x&acirc;m lược, thế như chẻ tre đ&aacute;nh thẳng xuống ph&iacute;a Nam, người H&aacute;n ồ ạt chạy nạn, kh&oacute;i lửa bốn bề, nước mất nh&agrave; tan, lang thang phi&ecirc;u bạt kh&ocirc;ng chốn lương th&acirc;n...</p>\r\n\r\n<p><strong>Tập 3</strong></p>\r\n\r\n<p>Du Hiểu v&agrave; c&aacute;c huynh đệ kết nghĩa vượt qua cảnh ngộ lưu lạc c&ugrave;ng khốn, về đến Giang Nam dốc hết sức lực gầy dựng nửa mảnh giang sơn đ&atilde; bị gi&agrave;y x&eacute;o dưới g&oacute;t sắt qu&acirc;n th&ugrave;...</p>', '14.5 x 20.5 cm', '800', '2019-02-20', '2019-05-09 01:51:57', '2019-05-09 01:51:57'),
(44, 45, 1, 130, 2019, '<p>Phụ nữ Nhật Bản v&agrave; b&iacute; mật giản đơn kh&ocirc;ng ngờ cho một l&agrave;n da &ldquo;kh&ocirc;ng tuổi&rdquo;</p>\r\n\r\n<p>T&ocirc;i đ&atilde; từng đọc ở đ&acirc;u đ&oacute; lời v&iacute; von so s&aacute;nh l&agrave;n da của phụ nữ Nhật Bản giống như một miếng đậu phụ non, trắng trẻo, mềm mại v&agrave; tuyệt đối mịn m&agrave;ng. Phụ nữ Nhật sở hữu một l&agrave;n da trắng mịn trứ danh v&agrave; kỳ diệu thay điều n&agrave;y lại kh&ocirc;ng phải c&aacute; biệt, phần lớn phụ nữ Nhật đều sở hữu một l&agrave;n da đẹp đồng đều như thế. Điều kỳ diệu thứ hai l&agrave; l&agrave;n da đ&oacute; dường như &ldquo;kh&ocirc;ng tuổi&rdquo;, ngay cả những người phụ nữ đ&atilde; bước v&agrave;o thời kỳ trung ni&ecirc;n, khu&ocirc;n mặt d&ugrave; c&oacute; xuất hiện dấu hiệu tuổi t&aacute;c, th&igrave; da của họ vẫn rất mịn m&agrave;ng v&agrave; đặc biệt trắng trẻo.</p>\r\n\r\n<p>Một trong những điểm kh&aacute;c biệt kh&aacute; lớn ở chu tr&igrave;nh dưỡng da của người Nhật l&agrave; họ kh&ocirc;ng qu&aacute; phụ thuộc v&agrave;o c&aacute;c sản phẩm hay c&ocirc;ng nghệ dưỡng da đắt tiền, đối với người Nhật, th&oacute;i quen tập luyện cộng th&ecirc;m lối sống v&agrave; tinh thần mới l&agrave; những yếu tố quan trọng để mang tới một l&agrave;n da tươi trẻ v&agrave; sức khỏe dồi d&agrave;o.</p>\r\n\r\n<p>Nghe th&igrave; c&oacute; vẻ hơi xa vời, nhưng người Nhật c&oacute; một quan niệm kh&aacute; tương đồng với người Ph&aacute;p trong chuyện chăm s&oacute;c sắc đẹp. Họ c&oacute; xu hướng đầu tư v&agrave;o việc bảo tr&igrave; v&agrave; nu&ocirc;i dưỡng da dẻ về l&acirc;u về d&agrave;i, hơn l&agrave; những biện ph&aacute;p chăm s&oacute;c tức thời như đi thẩm mỹ hay tin v&agrave;o những sản phẩm dưỡng da mang lại hiệu quả tức thời. Ch&iacute;nh sự đầu tư cơ bản nhưng d&agrave;i hạn, trải d&agrave;i từ khi tuổi đời c&ograve;n rất trẻ v&agrave; rất c&oacute; thể cho tới hết cuộc đời, đ&atilde; biến việc chăm s&oacute;c sắc đẹp kh&ocirc;ng c&ograve;n l&agrave; một chu tr&igrave;nh rắc rối hay gượng &eacute;p, m&agrave; đ&atilde; trở th&agrave;nh một điều quen thuộc tựa như việc đ&aacute;nh răng rửa mặt h&agrave;ng ng&agrave;y. Việc chăm s&oacute;c l&agrave;n da tuyệt đối kh&ocirc;ng phải l&agrave; một g&aacute;nh nặng duy tr&igrave; nhan sắc, n&oacute; l&agrave; một nghi thức tự chăm s&oacute;c bản th&acirc;n m&agrave; phụ nữ Nhật nhất nhất t&ocirc;n thờ v&agrave; chăm chỉ thực hiện ng&agrave;y qua ng&agrave;y.</p>\r\n\r\n<p>Phương ph&aacute;p trẻ h&oacute;a da kh&ocirc;ng-tốn-một-đồng của h&agrave;ng triệu phụ nữ Nhật</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:57:59', '2019-05-09 01:57:59'),
(45, 46, 1, 130, 2019, '<p>Bạch Lăng Lăng, nữ sinh khoa Điện kh&iacute;, trẻ trung, xinh đẹp v&agrave; rất tự h&agrave;o khi quen được một người bạn l&yacute; tưởng qua mạng, ch&agrave;ng du học sinh của một trường nổi tiếng của Mỹ, người mang biệt danh &ldquo;nh&agrave; khoa học&rdquo;: M&atilde;i M&atilde;i L&agrave; Bao Xa. Qua những cuộc chuyện tr&ograve; tr&ecirc;n QQ, Lăng Lăng đ&atilde; gắn b&oacute; với ch&agrave;ng trai đ&oacute; l&uacute;c n&agrave;o c&ocirc; cũng kh&ocirc;ng hay, cảm x&uacute;c lớn dần, sự chia sẻ lớn dần v&agrave; đến một ng&agrave;y c&ocirc; ph&aacute;t hiện ra m&igrave;nh đ&atilde; y&ecirc;u người con trai &ldquo;t&agrave;i giỏi&rdquo; v&agrave; kh&ocirc;ng một ch&uacute;t khuyết điểm ấy. Nhưng sự tỉnh t&aacute;o gi&uacute;p c&ocirc; &yacute; thức được rằng, thế giới mạng chỉ l&agrave; ảo, họ ở c&aacute;ch nhau cả một đại dương m&ecirc;nh m&ocirc;ng, anh lại qu&aacute; xuất sắc v&agrave; ưu t&uacute;, mối quan hệ của họ sẽ kh&ocirc;ng c&oacute; kết quả g&igrave;. Nhất l&agrave; khi anh th&ocirc;ng b&aacute;o, nếu anh tiếp tục sự nghiệp nghi&ecirc;n cứu lần n&agrave;y, rất c&oacute; thể anh phải định cư b&ecirc;n Mỹ, m&atilde;i m&atilde;i kh&ocirc;ng trở về. Khi nghe tin đ&oacute;, c&ocirc; đ&atilde; gục xuống trước m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh v&agrave; kh&oacute;c. Tất cả như sụp đổ, tia hy vọng cuối c&ugrave;ng dập tắt, anh sẽ kh&ocirc;ng về nước nữa, khoảng c&aacute;ch giữa họ l&agrave; m&atilde;i m&atilde;i&hellip; C&ocirc; cay đắng n&oacute;i với anh lời từ biệt v&agrave; đưa nick của anh v&agrave;o danh s&aacute;ch đen, kh&ocirc;ng bao giờ xuất hiện khi c&ocirc; đăng nhập QQ nữa&hellip;</p>\r\n\r\n<p>Một năm tr&ocirc;i qua, Lăng Lăng tưởng đ&atilde; qu&ecirc;n đi &ldquo;nh&agrave; khoa học&rdquo; ở b&ecirc;n kia thế giới của m&igrave;nh, b&ecirc;n c&ocirc; đ&atilde; c&oacute; U&ocirc;ng Đ&agrave;o, bạn trai, người mang lại cho c&ocirc; cảm gi&aacute;c an to&agrave;n, người c&ocirc; muốn lấy l&agrave;m chồng d&ugrave; cảm x&uacute;c d&agrave;nh cho anh chưa hẳn l&agrave; t&igrave;nh y&ecirc;u. C&ocirc; bảo vệ đề &aacute;n tốt nghiệp, U&ocirc;ng Đ&agrave;o lu&ocirc;n quấn qu&yacute;t b&ecirc;n c&ocirc;&hellip; V&agrave; điều bất ngờ trong buổi bảo vệ đề &aacute;n, Dương Lam H&agrave;ng, một giảng vi&ecirc;n trẻ vừa trở về từ MIT, trường đại học danh tiếng của Mỹ, xuất th&acirc;n từ một gia đ&igrave;nh danh gi&aacute;, đ&atilde; tới tham dự buổi bảo vệ của c&ocirc; v&agrave; đưa ra những c&acirc;u hỏi phản biện thật &ldquo;kh&oacute; chịu&rdquo;. Với c&ocirc;, Tất cả c&aacute;c nữ sinh trong trường đều ngưỡng mỗ v&agrave; ao ước được trở th&agrave;nh b&oacute;ng hồng trong tr&aacute;i tim của Dương Lam H&agrave;ng, nhưng với c&ocirc;, đ&oacute; đ&uacute;ng l&agrave; &ocirc;ng thầy &ldquo;biến th&aacute;i&rdquo;. Sự trớ tr&ecirc;u của số phận đun đẩy khiến c&ocirc; ng&agrave;y c&agrave;ng tiếp x&uacute;c với anh nhiều hơn, v&agrave; ch&iacute;nh anh l&agrave; người gợi &yacute; v&agrave; n&acirc;ng đỡ cho c&ocirc; học tiếp thạc sĩ để c&oacute; cơ hội ở lại trường.</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:58:22', '2019-05-09 01:58:22'),
(46, 50, 1, 110, 2018, '<p>Bộ truyện&nbsp;<strong>&ldquo;B&aacute;c sĩ ph&aacute;p y Tần Minh&rdquo;</strong>&nbsp;được ch&iacute;nh tay b&aacute;c sĩ ph&aacute;p y Tần Minh (c&ugrave;ng t&ecirc;n) viết. &Ocirc;ng c&oacute; nhiều năm kinh nghiệm trong nghề ph&aacute;p y v&agrave; mỗi c&acirc;u chuyện &ocirc;ng viết đều lấy từ chất liệu thực tế trong nghề của &ocirc;ng. Bộ truyện viết về h&agrave;nh tr&igrave;nh ph&aacute; &aacute;n dựa tr&ecirc;n chứng cứ ph&aacute;p y khoa học, thuyết phục&nbsp; của b&aacute;c sĩ ph&aacute;p y Tần Minh v&agrave; đồng nghiệp. Kết cấu mỗi tập l&agrave; 1 vụ &aacute;n ch&iacute;nh xuy&ecirc;n suốt (kẻ s&aacute;t nh&acirc;n thường l&agrave; kẻ s&aacute;t nh&acirc;n h&agrave;ng loạt) v&agrave; đan xen l&agrave; c&aacute;c vụ &aacute;n nhỏ kh&aacute;c, cuối mỗi vụ &aacute;n l&agrave; những ph&uacute;t lắng l&ograve;ng, trăn trở, suy tư của nh&acirc;n vật t&ocirc;i. Đồng thời, qua bộ truyện n&agrave;y người đọc cũng thấu nỗi vất vả, cũng như l&ograve;ng y&ecirc;u nghề, tận t&acirc;m với nghề của c&aacute;c b&aacute;c sĩ ph&aacute;p y.</p>\r\n\r\n<p><strong>&ldquo;Người sống s&oacute;t&rdquo;</strong>&nbsp;l&agrave; tập thứ 5 trong bộ truyện&nbsp;<strong>&ldquo;B&aacute;c sĩ ph&aacute;p y Tần Minh&rdquo;</strong>&nbsp;kể về chuỗi những &aacute;n mạng song song xảy ra tr&ecirc;n 2 địa b&agrave;n kh&aacute;c nhau, c&oacute; thời gian s&iacute;t so&aacute;t nhau, c&aacute;c nạn nh&acirc;n ở mỗi vụ &aacute;n song song c&oacute; c&ugrave;ng chung 1 đặc điểm (c&ugrave;ng l&agrave; c&ocirc; d&acirc;u, c&ugrave;ng l&agrave; trẻ em, hoặc c&ugrave;ng l&agrave; người gi&agrave; neo đơn&hellip;). Hung thủ l&agrave; ai? Đang trốn ở gầm trời n&agrave;o?</p>\r\n\r\n<p>Truyện khởi đầu bằng hai đ&aacute;m cưới đẫm m&aacute;u dường như kh&ocirc;ng c&oacute; điểm chung, nhưng c&aacute;c nạn nh&acirc;n đều l&agrave; những c&ocirc; d&acirc;u c&oacute; c&ugrave;ng độ tuổi v&agrave; danh t&iacute;nh của kẻ giết người bỏ lại ph&iacute;a sau h&igrave;nh dạng in gi&agrave;y, k&iacute;ch thước, dấu v&acirc;n tay, dấu ch&acirc;n một c&aacute;ch ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một kẻ giết người t&acirc;m thần ph&acirc;n liệt? Hai hay nhiều người phạm tội?</p>\r\n\r\n<p>L&agrave; một sự bắt chước? Hoặc l&agrave; một cuộc th&aacute;ch đố thể thỏa m&atilde;n bản th&acirc;n?</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:02:27', '2019-05-09 02:02:27'),
(47, 47, 1, 130, 2019, '<p>Vốn l&agrave; học sinh xuất sắc, song v&igrave; thi kh&ocirc;ng đủ điểm m&agrave; Tạ Mạnh đến học ở Trung học W. Tại đ&acirc;y cậu gặp gỡ Qu&yacute; Kh&acirc;m Dương &ndash; một người c&oacute; t&iacute;nh c&aacute;ch ho&agrave;n to&agrave;n đối lập m&igrave;nh. Trong những năm th&aacute;ng thanh xu&acirc;n d&agrave;o dạt tại Trung học, hai thiếu ni&ecirc;n dần nảy sinh t&igrave;nh cảm, c&ugrave;ng nhau thi l&ecirc;n Đại học. Trải qua thanh xu&acirc;n, qua những mơ mộng c&ugrave;ng trui r&egrave;n trong cuộc sống, t&igrave;nh cảm hai người c&agrave;ng l&uacute;c c&agrave;ng s&acirc;u sắc, để sau c&ugrave;ng trở về qu&ecirc; cũ, cả hai lại c&ugrave;ng nắm tay l&agrave;m bạn đời, &ocirc;n chuyện những th&aacute;ng năm qua.</p>\r\n\r\n<p>T&aacute;c giả d&ugrave;ng b&uacute;t ph&aacute;p dịu d&agrave;ng, kể lại mượt m&agrave; những năm th&aacute;ng xanh tươi ấy, từng ch&uacute;t triển khai tỉ mỉ, khắc hoạ s&acirc;u sắc h&igrave;nh tượng hai thiếu ni&ecirc;n tới l&uacute;c trưởng th&agrave;nh, thanh xu&acirc;n tuỳ &yacute; bung nở. Kết hợp với phong thổ nhiều nơi, c&ugrave;ng sự kh&aacute;c biệt giữa cuộc sống đời thường v&agrave; hiện thực, c&acirc;u chuyện xoay quanh t&igrave;nh bạn, t&igrave;nh th&acirc;n cũng như t&igrave;nh y&ecirc;u của hai nh&acirc;n vật ch&iacute;nh, khiến độc giả tựa như đi qua th&aacute;ng năm, đi qua li&ecirc;n tiếp qu&aacute; khứ v&agrave; tương lai. C&acirc;u chuyện về qu&atilde;ng thời gian tr&ocirc;i qua như nước, như hoa mĩ quyến, về tuổi trẻ như mộng, vừa tốt đẹp, cũng rất đỗi dịu d&agrave;ng.</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:58:43', '2019-05-09 01:58:43'),
(48, 51, 1, 110, 2018, '<p>Sức mạnh của cuốn s&aacute;ch n&agrave;y l&agrave; c&oacute; thể cuốn h&uacute;t cả trẻ con cũng như người lớn. Trẻ con th&igrave; thấy giống qu&aacute;, người lớn th&igrave; thấy nhớ qu&aacute;...</p>\r\n\r\n<p>Một cuốn s&aacute;ch nặng, d&agrave;y hơn 400 trang -kể ra l&agrave; một th&aacute;ch thức kh&ocirc;ng nhỏ trong thời buổi con người ta đang bị cuốn v&agrave;o những lo toan kinh tế thường nhật. Nhưng nếu bạn đ&atilde; lướt qua h&igrave;nh ảnh một ch&uacute; nh&oacute;c thoạt đầu đ&atilde; thấy si&ecirc;u quậy tr&ecirc;n trang b&igrave;a, lại chăm ch&uacute; trước hai c&aacute;i t&ecirc;n Goscinny v&agrave; Semp&eacute;. Nhất l&agrave; Goscinny, người đ&atilde; s&aacute;ng tạo ra Lucky Luke, những cuộc phi&ecirc;u lưu của Ast&eacute;rix...</p>\r\n\r\n<p>Tr&ograve; hờn dỗi lu&ocirc;n được nh&oacute;c Nicolas g&agrave;o l&ecirc;n ở mọi l&uacute;c, mọi nơi khi n&oacute; gặp phải chuyện g&igrave; kh&ocirc;ng vừa &yacute;. Từ việc l&agrave;n da đỏ au khi đi biển về kh&ocirc;ng kiếm đ&acirc;u bạn th&acirc;n để ngắm, lần đầu ti&ecirc;n ăn cơm ở trường cảm gi&aacute;c đ&aacute;ng sợ l&agrave;m sao, phải l&agrave;m b&agrave;i tập số học kinh ho&agrave;ng đến thế n&agrave;o, v&igrave; điểm &ldquo;Kh&ocirc;ng&rdquo; m&ocirc;n Ngữ ph&aacute;p n&ecirc;n bị cấm xem phim... cho tới h&ocirc;m b&agrave;i ch&iacute;nh tả &iacute;t lỗi nhất lớp kh&ocirc;ng được bố mẹ xem x&eacute;t nghi&ecirc;m chỉnh. Nh&oacute;c Nicolas lặp m&atilde;i b&agrave;i ca: Nếu cứ bị mọi người &eacute;p sẽ ph&aacute;t ch&aacute;n m&agrave; bỏ nh&agrave; ra đi, sẽ bị chết v&agrave; cả nh&agrave; tha hồ m&agrave; thương tiếc...</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:06:02', '2019-05-09 02:06:02'),
(49, 52, 1, 110, 2018, '<p>Kaizaki Arata, 27 tuổi, thất nghiệp, ch&aacute;n nản với cuộc đời. T&igrave;nh cờ trong một lần say xỉn, anh trở th&agrave;nh đối tượng th&iacute; nghiệm của dự &aacute;n mang t&ecirc;n&nbsp;ReLIFE, bị thu nhỏ về h&igrave;nh dạng của một học sinh cao trung 17 tuổi, từ đ&oacute; bắt đầu h&agrave;nh tr&igrave;nh học lại kỹ năng sống, l&agrave;m lại cuộc đời.</p>\r\n\r\n<p><strong>Giới thiệu T&aacute;c giả - Họa sĩ:</strong></p>\r\n\r\n<p><strong>YAYOISO &ndash;&nbsp;</strong>T&aacute;c giả c&oacute; lượng view cao nhất web đọc truyện online COMICO, với t&aacute;c phẩm đ&atilde; được chuyển thể th&agrave;nh phim hoạt h&igrave;nh, phim điện ảnh v&agrave; tiểu thuyết.</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:06:30', '2019-05-09 02:06:30'),
(50, 48, 1, 130, 2019, '<p>Thiếp -&nbsp; một thiếu nữ ng&acirc;y thơ kh&ocirc;ng hiểu chuyện đời</p>\r\n\r\n<p>Ch&agrave;ng - một thiếu ni&ecirc;n lạnh l&ugrave;ng thoi th&oacute;p hơi t&agrave;n bị v&ugrave;i dưới tuyết</p>\r\n\r\n<p>Buổi đầu gặp gỡ ấy, chẳng ai đo&aacute;n trước được sau n&agrave;y m&igrave;nh sẽ c&oacute; vai tr&ograve; thế n&agrave;o trong cuộc đời nhau.</p>\r\n\r\n<p>Ch&uacute;ng ta kh&ocirc;ng tin v&agrave;o vận mệnh, song lại chẳng c&oacute; sức để phản kh&aacute;ng sự thao t&uacute;ng của vận mệnh.</p>\r\n\r\n<p>Vậy nhưng, d&ugrave; c&otilde;i nh&acirc;n gian đều coi ch&agrave;ng l&agrave; kẻ địch, thiếp vẫn chẳng ch&uacute;t hối hận khi s&aacute;nh bước b&ecirc;n ch&agrave;ng.</p>', '14.5 x 20.5 cm', '300', '2019-02-20', '2019-05-09 01:59:16', '2019-05-09 01:59:16'),
(51, 53, 1, 110, 2018, '<p>Tiếp nối th&agrave;nh c&ocirc;ng của cuốn s&aacute;ch vạn bản in NHỮNG MẢNH GH&Eacute;P CUỘC ĐỜI (PIECES OF YOU), Tablo tiếp tục cuộc hội ngộ với độc giả Việt Nam qua cuốn s&aacute;ch đặc biệt được h&agrave;ng triệu fan h&acirc;m mộ mong chờ c&oacute; t&ecirc;n BLONOTE.</p>\r\n\r\n<p>Tablo (Epik High) đ&atilde; bi&ecirc;n soạn một cuốn s&aacute;ch theo c&aacute;ch rất th&ocirc;ng minh v&agrave; s&acirc;u sắc c&oacute; t&ecirc;n &quot;Blonote&quot;, trong đ&oacute; gồm những tấm thẻ nhỏ k&egrave;m với d&ograve;ng ghi ch&uacute; m&agrave; rapper đọc cho người nghe đ&agrave;i của m&igrave;nh trong chương tr&igrave;nh ph&aacute;t thanh c&aacute; nh&acirc;n &quot;Dreaming With Tablo&quot;. C&aacute;c d&ograve;ng note kể về những ho&agrave;i niệm v&agrave;o những ng&agrave;y kh&aacute;c nhau của anh, cũng như chữ viết tay từ những nghệ sĩ nổi tiếng kh&aacute;c như G- Dragon, Gong Hyo Jin, Lee Sung Kyung,...</p>\r\n\r\n<p>Nhiều người vốn đ&atilde; qu&aacute; quen thuộc với một Tablo gai g&oacute;c, c&aacute; t&iacute;nh qua những ca kh&uacute;c mang nhiều th&ocirc;ng điệp cổ vũ lối suy nghĩ t&iacute;ch cực. Nhưng trong những trang văn của m&igrave;nh, anh lại thể hiện một kh&iacute;a cạnh kh&aacute;c của t&acirc;m hồn với những g&oacute;c s&aacute;ng tối mu&ocirc;n m&agrave;u của cuộc sống c&ugrave;ng với những h&igrave;nh ảnh ẩn dụ &yacute; nghĩa, c&oacute; chiều s&acirc;u v&agrave; đề cao t&iacute;nh tư duy.</p>\r\n\r\n<p>Như trong những trang viết mở đầu cuốn s&aacute;ch Tablo viết:</p>\r\n\r\n<p>&ldquo;Đ&acirc;y l&agrave; những cảm nghĩ bất chợt thay cho lời ch&agrave;o tạm biệt cuối mỗi chương tr&igrave;nh ph&aacute;t thanh đ&ecirc;m khuya m&agrave; t&ocirc;i chủ tr&igrave;. Những c&acirc;u văn n&agrave;y kh&ocirc;ng cố tỏ ra l&agrave; phần mở đầu hay kết th&uacute;c của bất kỳ &yacute; tưởng lớn lao n&agrave;o nhưng t&ocirc;i mong rằng ch&uacute;ng sẽ l&agrave; xuất ph&aacute;t điểm của một nguồn cảm hứng v&agrave; l&agrave; nơi kết th&uacute;c của mỗi nỗi niềm trăn trở. H&atilde;y đặt cuốn s&aacute;ch n&agrave;y ở một nơi bạn c&oacute; thể dễ d&agrave;ng chạm tới mỗi khi thấy canh c&aacute;nh trong l&ograve;ng.&rdquo;</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:06:54', '2019-05-09 02:06:54'),
(52, 49, 1, 110, 2018, '<p>Ngay trong năm đầu ti&ecirc;n ph&aacute;t h&agrave;nh - 1960, Sự trỗi dậy v&agrave; suy t&agrave;n của Đế chế thứ ba đ&atilde; b&aacute;n được tới 1 triệu bản tại Mỹ v&agrave; được t&aacute;i bản hơn 20 lần. Cuốn s&aacute;ch l&agrave; bản tường thuật hết sức chi tiết về nước Đức, dưới sự cai trị của Adolf Hitler v&agrave; Đảng Quốc x&atilde;. T&aacute;c giả đ&atilde; nghi&ecirc;n cứu kĩ lưỡng về sự ra đời của Đế chế thứ ba ở Đức, con đường dẫn đến quyền lực tuyệt đối của Đảng Quốc x&atilde;, diễn biến của Chiến tranh thế giới lần thứ hai v&agrave; sự thất bại của Ph&aacute;t x&iacute;t Đức. Nguồn t&agrave;i liệu của cuốn s&aacute;ch bao gồm lời khai của c&aacute;c nh&agrave; l&atilde;nh đạo Đảng Quốc x&atilde;, nhật k&iacute; của c&aacute;c quan chức, c&ugrave;ng h&agrave;ng loạt c&aacute;c qu&acirc;n lệnh v&agrave; thư mật. Sự trỗi dậy v&agrave; suy t&agrave;n của Đế chế thứ ba l&agrave; một trong những c&ocirc;ng tr&igrave;nh nghi&ecirc;n cứu lịch sử quan trọng nhất, n&oacute;i về một trong những giai đoạn u &aacute;m nhất của lịch sử lo&agrave;i người.</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:01:02', '2019-05-09 02:01:02'),
(53, 49, 1, 110, 2018, '<p>Bộ truyện&nbsp;<strong>&ldquo;B&aacute;c sĩ ph&aacute;p y Tần Minh&rdquo;</strong>&nbsp;được ch&iacute;nh tay b&aacute;c sĩ ph&aacute;p y Tần Minh (c&ugrave;ng t&ecirc;n) viết. &Ocirc;ng c&oacute; nhiều năm kinh nghiệm trong nghề ph&aacute;p y v&agrave; mỗi c&acirc;u chuyện &ocirc;ng viết đều lấy từ chất liệu thực tế trong nghề của &ocirc;ng. Bộ truyện viết về h&agrave;nh tr&igrave;nh ph&aacute; &aacute;n dựa tr&ecirc;n chứng cứ ph&aacute;p y khoa học, thuyết phục&nbsp; của b&aacute;c sĩ ph&aacute;p y Tần Minh v&agrave; đồng nghiệp. Kết cấu mỗi tập l&agrave; 1 vụ &aacute;n ch&iacute;nh xuy&ecirc;n suốt (kẻ s&aacute;t nh&acirc;n thường l&agrave; kẻ s&aacute;t nh&acirc;n h&agrave;ng loạt) v&agrave; đan xen l&agrave; c&aacute;c vụ &aacute;n nhỏ kh&aacute;c, cuối mỗi vụ &aacute;n l&agrave; những ph&uacute;t lắng l&ograve;ng, trăn trở, suy tư của nh&acirc;n vật t&ocirc;i. Đồng thời, qua bộ truyện n&agrave;y người đọc cũng thấu nỗi vất vả, cũng như l&ograve;ng y&ecirc;u nghề, tận t&acirc;m với nghề của c&aacute;c b&aacute;c sĩ ph&aacute;p y.</p>\r\n\r\n<p><strong>&ldquo;Người sống s&oacute;t&rdquo;</strong>&nbsp;l&agrave; tập thứ 5 trong bộ truyện&nbsp;<strong>&ldquo;B&aacute;c sĩ ph&aacute;p y Tần Minh&rdquo;</strong>&nbsp;kể về chuỗi những &aacute;n mạng song song xảy ra tr&ecirc;n 2 địa b&agrave;n kh&aacute;c nhau, c&oacute; thời gian s&iacute;t so&aacute;t nhau, c&aacute;c nạn nh&acirc;n ở mỗi vụ &aacute;n song song c&oacute; c&ugrave;ng chung 1 đặc điểm (c&ugrave;ng l&agrave; c&ocirc; d&acirc;u, c&ugrave;ng l&agrave; trẻ em, hoặc c&ugrave;ng l&agrave; người gi&agrave; neo đơn&hellip;). Hung thủ l&agrave; ai? Đang trốn ở gầm trời n&agrave;o?</p>\r\n\r\n<p>Truyện khởi đầu bằng hai đ&aacute;m cưới đẫm m&aacute;u dường như kh&ocirc;ng c&oacute; điểm chung, nhưng c&aacute;c nạn nh&acirc;n đều l&agrave; những c&ocirc; d&acirc;u c&oacute; c&ugrave;ng độ tuổi v&agrave; danh t&iacute;nh của kẻ giết người bỏ lại ph&iacute;a sau h&igrave;nh dạng in gi&agrave;y, k&iacute;ch thước, dấu v&acirc;n tay, dấu ch&acirc;n một c&aacute;ch ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một kẻ giết người t&acirc;m thần ph&acirc;n liệt? Hai hay nhiều người phạm tội?</p>\r\n\r\n<p>L&agrave; một sự bắt chước? Hoặc l&agrave; một cuộc th&aacute;ch đố thể thỏa m&atilde;n bản th&acirc;n?</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:02:12', '2019-05-09 02:02:12'),
(54, 58, 1, 110, 2018, '<p><strong>&ldquo;Chiến tranh tiền tệ&rdquo;</strong>&nbsp;gi&uacute;p ch&uacute;ng ta hiểu nhiều điều, rằng Bill Gates chưa phải l&agrave; người gi&agrave;u nhất h&agrave;nh tinh, rằng tỉ lệ tử vong của c&aacute;c tổng thống Mỹ lại cao hơn tỉ lệ tử trận của binh l&iacute;nh Mỹ ngo&agrave;i chiến trường, hay v&igrave; sao phố Wall lại mạo hiểm đổ hết vốn liếng của m&igrave;nh cho việc &ldquo;đầu tư&rdquo; v&agrave;o Hitler.</p>\r\n\r\n<p><strong>&ldquo;Chiến tranh tiền tệ&rdquo;</strong>&nbsp;đề cập đến một cuộc chiến khốc liệt, kh&ocirc;ng khoan nhượng v&agrave; dai dẳng giữa một nh&oacute;m nhỏ c&aacute;c &ocirc;ng tr&ugrave;m t&agrave;i ch&iacute;nh - đứng đầu l&agrave; gia tộc Rothschild - với c&aacute;c thể chế t&agrave;i ch&iacute;nh kinh tế của nhiều quốc gia. Đ&oacute; l&agrave; một cuộc chiến m&agrave; đồng tiền l&agrave; s&uacute;ng đạn v&agrave; mức s&aacute;t thương thật l&agrave; gh&ecirc; gớm. Một cuốn s&aacute;ch thực sự l&agrave;m sửng sốt với những ai muốn t&igrave;m hiểu về bản chất tiền tệ để từ đ&oacute; nhận ra những hiểm hoạ t&agrave;i ch&iacute;nh tiềm ẩn nhằm chuẩn bị t&acirc;m l&yacute;</p>\r\n\r\n<p>cho một cuộc chiến tiền tệ &ldquo;kh&ocirc;ng đổ m&aacute;u&rdquo;.</p>\r\n\r\n<p>B&ecirc;n cạnh việc phơi b&agrave;y những &acirc;m mưu của c&aacute;c nh&agrave; t&agrave;i phiệt thế giới trong việc tạo ra những cơn &ldquo;hạn h&aacute;n&rdquo; hay &ldquo;b&atilde;o lũ&rdquo; về tiền tệ để thu lợi nhuận, cuốn s&aacute;ch cũng đề cập đến sự ph&aacute;t triển của c&aacute;c định chế t&agrave;i ch&iacute;nh thế giới - những cơ cấu được x&acirc;y dựng nhằm đ&aacute;p ứng nhu cầu ph&aacute;t triển vũ b&atilde;o của nền kinh tế to&agrave;n cầu.</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:09:08', '2019-05-09 02:09:08'),
(55, 54, 1, 110, 2018, '<p>&ldquo;Tốt nhất l&agrave; kh&ocirc;ng gặp, kh&ocirc;ng gặp sẽ kh&ocirc;ng y&ecirc;u.</p>\r\n\r\n<p>Tốt nhất kh&ocirc;ng quen, kh&ocirc;ng quen sẽ kh&ocirc;ng nhớ.</p>\r\n\r\n<p>Nhưng từng gặp th&igrave; sẽ quen, gặp hay kh&ocirc;ng gặp kh&aacute;c g&igrave; nhau?</p>\r\n\r\n<p>Đ&agrave;nh c&ugrave;ng người quyết đoạn tuyệt, tr&aacute;nh được thương nhớ giữa sống chết.&rdquo;</p>\r\n\r\n<p>Nếu biết c&ograve;n 7 ng&agrave;y để sống, t&ocirc;i sẽ&hellip;&hellip;&hellip;</p>\r\n\r\n<p>Đ&atilde; bao giờ bạn tưởng tượng bạn sẽ được b&aacute;o trước 7 ng&agrave;y nữa m&igrave;nh sẽ chết?</p>\r\n\r\n<p>Nghe thật buồn cười nhưng một ng&agrave;y như thế sẽ l&agrave;m bạn phải suy nghĩ lại chứ?</p>\r\n\r\n<p>Những lời n&agrave;o bạn muốn n&oacute;i</p>\r\n\r\n<p>Người n&agrave;o bạn muốn gặp gỡ</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:07:35', '2019-05-09 02:07:35'),
(56, 55, 1, 110, 2018, '<p>Cổ vật trong&nbsp;&Aacute; X&aacute;, mỗi một vật đều c&oacute; c&acirc;u chuyện của ri&ecirc;ng m&igrave;nh, cất giữ rất nhiều năm, chẳng ai lắng nghe.</p>\r\n\r\n<p>Bởi v&igrave;,&nbsp;ch&uacute;ng đều kh&ocirc;ng biết n&oacute;i&hellip;</p>\r\n\r\n<p>Sơn Hải Kinh</p>\r\n\r\n<p>Một chiếc thẻ tre gi&ograve;n yếu đến mức kh&ocirc;ng chịu nổi một c&uacute; va chạm nhưng lại phong ấn ma th&uacute; lớn mạnh từ thời viễn cổ.</p>\r\n\r\n<p>Ngọc Thủy Hương</p>\r\n\r\n<p>Một miếng tượng ch&uacute;a c&oacute; thể trao đổi linh hồn giữa hai người, khiến thế giới của họ ho&agrave;n to&agrave;n đảo lộn.</p>\r\n\r\n<p>Rối m&ecirc; hoặc</p>\r\n\r\n<p>Một con rối gỗ mang theo t&igrave;nh y&ecirc;u hai ngh&igrave;n năm, biến h&oacute;a ra thế giới m&agrave; chủ nh&acirc;n mong muốn.</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:07:54', '2019-05-09 02:07:54'),
(57, 56, 1, 110, 2018, '<p>Sự kiện đầu ti&ecirc;n sau khi Triển Chi&ecirc;u v&agrave; Bạch Ngọc Đường th&agrave;nh th&acirc;n!</p>\r\n\r\n<p>Hai người trở về từ tuần trăng mật tr&ecirc;n H&atilde;m Kh&ocirc;ng Đảo, đ&uacute;ng l&uacute;c gặp phải vụ &aacute;n phủ do&atilde;n Th&agrave;nh Đ&ocirc; l&agrave; Hạ Ch&iacute;nh tham &ocirc;.</p>\r\n\r\n<p>Bao đại nh&acirc;n v&agrave; Triệu Phổ phụng mệnh vi h&agrave;nh điều tra, mi&ecirc;u thử v&agrave; C&ocirc;ng T&ocirc;n ti&ecirc;n sinh đương nhi&ecirc;n cũng phải theo c&ugrave;ng.</p>\r\n\r\n<p>Nhưng kh&ocirc;ng ngờ c&ograve;n chưa đến Thục Trung, đ&atilde; nghe được c&acirc;u chuyện ma mị về m&egrave;o Ngũ Mệnh.</p>\r\n\r\n<p>Chưa hết, trong qu&aacute; tr&igrave;nh điều tra, bọn họ kh&ocirc;ng chỉ ph&aacute;t hiện Hạ Ch&iacute;nh cấu kết với ngoại tộc, m&agrave; trong phủ c&ograve;n c&oacute; một bộ tộc kỳ dị được xưng l&agrave; &quot;dạ h&agrave;nh giả&quot; tụ tập.</p>\r\n\r\n<p>Nghe n&oacute;i c&aacute;c dạ h&agrave;nh giả n&agrave;y sợ &aacute;nh nắng, h&uacute;t m&aacute;u m&agrave; sống, sinh hoạt hỗn loạn hoang đường, hơn nữa c&ograve;n trẻ m&atilde;i kh&ocirc;ng gi&agrave;, trường sinh bất l&atilde;o!</p>\r\n\r\n<p>Để điều tra ch&acirc;n tướng, đương nhi&ecirc;n Triển Chi&ecirc;u v&agrave; Bạch Ngọc Đường ti&ecirc;n phong th&acirc;m nhập.</p>\r\n\r\n<p>C&aacute;ch tốt nhất hiển nhi&ecirc;n l&agrave; ngụy trang th&agrave;nh một &quot;dạ h&agrave;nh giả&quot;!</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:08:19', '2019-05-09 02:08:19'),
(58, 57, 1, 110, 2018, '<p>&ldquo;C&oacute; những ng&agrave;y d&agrave;i thật buồn, b&oacute; gối trong căn ph&ograve;ng nhỏ, nh&igrave;n ra bầu trời cao rộng ngo&agrave;i kia, t&ocirc;i lu&ocirc;n mang trong m&igrave;nh suy nghĩ bầu trời ấy kh&ocirc;ng c&oacute; chỗ d&agrave;nh cho t&ocirc;i. T&ocirc;i lu&ocirc;n tự hỏi &ldquo;M&igrave;nh muốn l&agrave;m g&igrave;?&rdquo;, &ldquo;M&igrave;nh phải l&agrave;m g&igrave;?&rdquo;, &ldquo;M&igrave;nh cố gắng v&igrave; điều g&igrave;?&rdquo;,&hellip;&rdquo;</p>\r\n\r\n<p>Ch&uacute;ng ta, ai cũng từng trải qua những ng&agrave;y như thế. Đ&oacute; l&agrave; qu&atilde;ng thời gian ta cứ quẩn quanh đ&acirc;y đ&oacute; t&igrave;m kiếm c&acirc;u trả lời m&igrave;nh l&agrave; ai, m&igrave;nh thực sự muốn g&igrave;. Giữa những ch&ocirc;ng ch&ecirc;nh của tuổi trẻ, khi đứng giữa qu&aacute; nhiều ng&atilde; rẽ, ch&uacute;ng ta&nbsp; bắt buộc phải đưa ra một sự lựa chọn cho ri&ecirc;ng m&igrave;nh. Con đường n&agrave;o cũng hấp dẫn, cũng mời gọi, nhưng cũng đầy thử th&aacute;ch v&agrave; ch&ocirc;ng gai.</p>\r\n\r\n<p>Đừng l&atilde;ng ph&iacute; những ng&agrave;y đẹp trời l&agrave; cuốn s&aacute;ch viết về những năm th&aacute;ng thanh xu&acirc;n đầy hoang mang, khi t&acirc;m tr&iacute; ta lấp đầy bởi những c&acirc;u hỏi cần lời giải đ&aacute;p. Nhưng ngo&agrave;i những ng&agrave;y &acirc;m u, tuổi thanh xu&acirc;n của ch&uacute;ng ta l&agrave; &ldquo;những ng&agrave;y đẹp trời, những ng&agrave;y c&otilde;i l&ograve;ng an y&ecirc;n đến lạ; những ng&agrave;y m&agrave; đến cả nỗi buồn, sự c&ocirc; đơn, cũng trở n&ecirc;n thật đẹp.&rdquo; D&ugrave; những ng&agrave;y sau bạn th&agrave;nh c&ocirc;ng, vi&ecirc;n m&atilde;n đến chừng n&agrave;o, th&igrave; những năm th&aacute;ng hai mươi cũng l&agrave; qu&atilde;ng thời gian đẹp đẽ nhất, đ&aacute;ng nhớ nhất trong cuộc đời.</p>\r\n\r\n<p>C&oacute; thể ngay l&uacute;c n&agrave;y đ&acirc;y, bạn muốn nhanh thật nhanh bước ra khỏi tuổi trẻ của m&igrave;nh, để trưởng th&agrave;nh hơn, để c&oacute; trong tay nhiều thứ hơn. Nhưng đừng vội v&atilde;, đừng l&atilde;ng ph&iacute; những ng&agrave;y đẹp trời đ&oacute;, bởi tuổi trẻ tr&ocirc;i qua, ta sẽ trưởng th&agrave;nh.</p>\r\n\r\n<p>&ldquo;Thanh xu&acirc;n l&agrave; một lần đi xa m&atilde;i kh&ocirc;ng về.</p>', '14.5 x 20.5 cm', '320', '2018-04-20', '2019-05-09 02:08:43', '2019-05-09 02:08:43'),
(59, 226, 1, NULL, 1999, 'đâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadfđâfadf', NULL, NULL, NULL, '2024-08-18 09:10:27', '2024-08-18 09:10:27'),
(60, 225, 1, NULL, 2000, '<p>HIIHIHIHIH&nbsp;<br />\r\nGỚII THIỆU S&Aacute;CH N&Egrave;&nbsp;<br />\r\nS&Aacute;CH N&Agrave;Y HAY LẮM, ĐỌC ĐI C&Aacute;C BẠN</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p>sfghdghddghdgh</p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>gdhdghdghdghdghdghdgh</strong></p>', NULL, NULL, NULL, '2024-08-18 09:10:57', '2024-08-21 09:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhdaidien` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `anhdaidien`, `thutu`, `created_at`, `updated_at`) VALUES
(1, 'Nổi bật', 'dm_notimg.jpg', 1, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(2, 'Sách kinh tế', 'dm_kinhte.jpg', 2, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(3, 'Văn học nước ngoài', 'dm_vhnuocngoai.jpg', 3, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(4, 'Văn học trong nước', 'dm_vhtrongnuoc.jpg', 4, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(5, 'Sách kĩ năng sống', 'dm_kinnangsong.jpg', 5, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(6, 'Sách tuổi teen', 'dm_tuoiteen.jpg', 6, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(7, 'Học Ngoại Ngữ', 'dm_ngoaingu.jpg', 7, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(8, 'Sách thiếu nhi', 'dm_thieunhi.jpg', 8, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(9, 'Thưởng thức đời sống', 'dm_thuongthucdoisong.jpg', 9, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(10, 'Sách chuyên nghành', 'dm_chuyennghanh.jpg', 10, '2019-04-09 03:43:57', '2019-04-09 03:43:57'),
(11, 'Văn phòng phẩm', 'qua-tang__16149.jpg', 11, '2019-04-09 03:43:57', '2019-04-22 14:28:29'),
(12, 'Công ty phát hành', 'dm_notimg.jpg', 12, '2019-04-09 03:43:57', '2019-04-09 03:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaiquangcao`
--

CREATE TABLE `loaiquangcao` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `tenloaiquangcao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaiquangcao`
--

INSERT INTO `loaiquangcao` (`id`, `tenloaiquangcao`, `created_at`, `updated_at`) VALUES
(1, 'slide', '2019-04-10 14:35:40', '2019-04-10 14:35:40'),
(2, 'Quảng cáo sản phẩm', '2019-04-10 14:35:40', '2019-04-10 14:35:40'),
(3, 'Quảng cáo cho thương hiệu', '2019-04-10 14:35:40', '2019-04-10 14:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisach` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `madanhmuc` tinyint(3) UNSIGNED NOT NULL,
  `tenloai` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhbia` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`id`, `madanhmuc`, `tenloai`, `anhbia`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sách bán chạy', 'sachbanchay.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(2, 1, 'Sách mới', 'sachmoi.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(3, 1, 'Sắp phát hành', 'sapphathanh.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(4, 1, 'Sách giảm giá', 'sachgiamgia.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(5, 2, 'Tài chính - Kế toán', 'taichinhketoan.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(6, 2, 'Quản Trị - Lãnh đạo', 'quantrilanhdao.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(7, 2, 'Marketing - Bán hàng', 'marketing.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(8, 2, 'Kỹ năng làm việc', 'kynanglamviec.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(9, 2, 'Kinh tế học', 'kinhtehoc.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(10, 2, 'Khởi nghiệp', 'khoinghiep.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(11, 2, 'Danh nhân - Tập đoàn', 'doanhnhantapdoan.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(12, 2, 'Bài học kinh doanh', 'baihockinhdoanh.jpg', '2019-04-10 13:46:51', '2019-04-10 13:46:51'),
(13, 3, 'Tiểu sử - Hồi ký', 'hoiky.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(14, 3, 'Truyện lịch sử - Kiếm hiệp', 'kiemhiep.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(15, 3, 'Truyện ngắn - Tản văn', 'truyenngan.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(16, 3, 'Tác phẩm kinh điển', 'kinhdien.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(17, 3, 'Huyền bí - Giả tưởng', 'giatuong.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(18, 3, 'Truyện trinh thám - Kinh dị', 'kinhdi.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(19, 3, 'Tiểu thuyết tình cảm - Lãng mạn', 'langman.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(20, 3, 'Tiểu thuyết đam mỹ', 'tieuthuyetdammy.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(21, 3, 'Bách hợp', 'bachhop.jpg', '2019-04-10 13:56:11', '2019-04-10 13:56:11'),
(31, 4, 'Tiểu thuyết', 'tieuthuyet.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(32, 4, 'Truyện ngắn - Tản văn', 'tanvan.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(33, 4, 'Huyền bí - Giả tưởng', 'huyenbi.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(34, 4, 'Phóng sự - Ký sự', 'kysu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(35, 4, 'Trinh thám - Kinh dị', 'trinhtham.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(36, 4, 'Tiểu sử - Hồi ký', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(37, 5, 'Kĩ năng sống', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(38, 5, 'Nghệ thuật sống đẹp', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(39, 6, 'Văn học teen', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(40, 6, 'Hướng nghiệp - Kỹ năng', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(41, 6, 'Light Novel', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(42, 6, 'Truyện tranh', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(43, 7, 'Từ điển', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(44, 7, 'Sách học tiếng Anh', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(45, 7, 'Sách học tiếng Hoa', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(46, 7, 'Sách học tiếng Nhật', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(47, 8, 'Truyện cổ tích - Thần thoại', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(48, 8, 'Vừa học vừa chơi', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(49, 8, 'Kiến thức - Kĩ năng', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(50, 8, 'Văn học', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(51, 8, 'Truyện kể cho bé', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(52, 9, 'Văn hóa - Du lịch', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(53, 9, 'Chăm sóc sức khỏe', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(54, 9, 'Phong thủy - Nhà cửa', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(55, 9, 'Nấu ăn', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(56, 9, 'Giải trí - Thể thao', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(57, 10, 'Giáo dục', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(58, 10, 'Công nghệ thông tin', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(59, 10, 'Lịch sử - Địa lý', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(60, 10, 'Khoa học tự nhiên', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(61, 10, 'Mỹ thuật - Kiến trúc', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(62, 10, 'Chính trị - Triết học', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(63, 10, 'Doanh nhân - Người nổi tiếng', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(64, 10, 'Tâm linh - Tôn giáo', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(65, 10, 'Y Dược', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(66, 10, 'Khoa học xã hội', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(67, 11, 'Hộp bút - Bút bi', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(68, 11, 'Bình nước, bình giữ nhiệt', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38'),
(69, 11, 'Thiệp, Qùa tặng', 'tieusu.jpg', '2019-04-10 14:17:38', '2019-04-10 14:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_08_222222_danhmuc', 1),
(4, '2019_04_08_223457_createloaisach', 1),
(5, '2019_04_08_223633_nhaxuatban', 1),
(6, '2019_04_08_223726_ngongu', 1),
(7, '2019_04_08_223800_tacgia', 1),
(8, '2019_04_08_223841_khachhang', 1),
(9, '2019_04_08_223924_nhanvien', 1),
(10, '2019_04_08_224018_loaiquangcao', 1),
(11, '2019_04_08_224036_quangcao', 1),
(12, '2019_04_08_224124_vanchuyen', 1),
(13, '2019_04_08_224159_phanquyen', 1),
(14, '2019_04_08_224359_taikhoan', 1),
(15, '2019_04_08_224451_sach', 1),
(16, '2019_04_08_224452_giohang', 1),
(17, '2019_04_09_090504_chitietsach', 1),
(18, '2019_04_09_091056_tintuc', 1),
(19, '2019_04_09_094928_rating', 1),
(20, '2019_05_07_215035_dondathang', 1),
(21, '2019_05_07_215036_chitietdonhang', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_10_03_070857_create_qltv_theloai_table', 1),
(24, '2019_10_03_071011_create_qltv_nxb_table', 1),
(25, '2019_10_03_072013_create_qltv_sach_table', 1),
(26, '2019_10_03_172326_create_qltv_khoa_table', 1),
(27, '2019_10_03_172450_create_qltv_nganh_table', 1),
(28, '2019_10_03_181645_create_qltv_docgia_table', 1),
(29, '2019_10_03_181752_create_qltv_thuthu_table', 1),
(30, '2019_10_03_181849_create_qltv_muonsach_table', 1),
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_02_16_130744_create_table_sach_table', 2),
(34, '2019_02_16_135105_create_table_users_table', 3),
(35, '2019_02_16_140454_add_create_at_to_users', 4),
(36, '2019_02_16_142101_create_users_table', 5),
(37, '2019_04_08_224000_danhmuc', 6),
(38, '2019_04_08_223924_nhanvien', 7),
(39, '2019_04_08_223841_khachhang', 8),
(40, '2019_04_08_223800_tacgia', 9),
(41, '2019_04_08_223726_ngongu', 10),
(42, '2019_04_08_223633_nhaxuatban', 11),
(43, '2019_04_08_224124_vanchuyen', 12),
(44, '2019_04_08_224313_loaiquangcao', 13),
(45, '2019_04_08_224759_phanquyen', 14),
(46, '2019_04_08_223457_createloaisach', 15),
(47, '2019_04_08_224036_quangcao', 16),
(48, '2019_04_08_224451_sach', 17),
(49, '2019_04_08_224718_rohang', 18),
(50, '2019_04_09_090504_chitietsach', 19),
(51, '2019_04_09_091056_tintuc', 20),
(52, '2019_04_09_094928_rating', 21),
(53, '2019_04_08_224359_toaikhoan', 22),
(54, '2019_05_07_215235_dondathang', 23),
(55, '2019_05_07_215036_chitietdonhang', 24);

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `tennhaxuatban` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`id`, `tennhaxuatban`, `logo`, `diachi`, `email`, `fax`, `created_at`, `updated_at`) VALUES
(1, 'Alphabooks', 'logo-alphabooks__81581.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Alphabooks@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(2, 'Amak', 'logo-amak__08040.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Amak@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(3, 'Asbooks', 'logo-asbooks__40145.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Asbooks@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(4, 'Bách Việt', 'logo-bachviet__07071.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'BachViet@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(5, 'Cẩm Phong', 'camphong__68570.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Camphong@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(6, 'Bắc Hà Books ', 'logo-bachabook__82093.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'BacHa@gmai.com', '04337792', '2019-04-09 03:06:44', '2019-04-09 03:06:44'),
(7, 'Chibooks', 'chibooks__00524.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Chibooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(8, 'Cổ Nguyệt', 'co-nguyet__27730.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'CoNguyetBooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(9, 'Dtbooks', 'dtbooks__93550.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Dtbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(10, 'First News - Trí Việt', 'first-news-tri-viet__62371.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'TriVietbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(11, 'Fujibooks', 'noimage.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Fujibooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(12, 'Hương Giang', 'huong-giang__04646.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'HuongGiang@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(13, 'Hương Trang', 'huong-trang__90150.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'huong-trang@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(14, 'Huy Hoàng', 'huy-hoang-book__45019.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'huy-hoang-book@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(15, 'IPM', 'ipm__74608.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'ipm_book@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(16, 'Lantabra', 'lantabra__40646.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'lantabra@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(17, 'Limbooks', 'limbooks__45149.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'limbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(18, 'Long Minh', 'longminhbooks__48154.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'longminhbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(19, 'Minh Châu Books', 'minh-chau__76192.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'minhchau@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(20, 'Minh Long', 'minh-long__77539.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'minhlong@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(21, 'Thái Hà', 'thai-ha__24637.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'thaihabooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(22, 'Minh Thắng', 'minh-thang__91108.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'minhthang@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(23, 'Newstarbooks', 'newstarbook__33512.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'newstarbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(24, 'Ngòi Bút Việt', 'noimage.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Ngoibutviet@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(25, 'Người Trẻ Việt', 'nguoi-tre-viet__42925.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NguoiTreViet@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(26, 'Nhã Nam', 'nha-nam__37691.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NhaNam@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(27, 'NXB Kim Đồng', 'nxb-kim-dong__54705.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NXBKimĐong@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(28, 'NXB Phụ Nữ', 'nxb-phu-nu__56562.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NXBPhuNu@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(29, 'NXB Trẻ', 'nxb-tre__00732.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NXBTre@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(30, 'NXB Tổng Hợp', 'nxb-tong-hop__37997.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'NXBTongHop@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00'),
(31, 'Owlbooks', 'owlbooks__29030.jpg', 'số 23 thị trấn Mỹ Hào-Hưng Yên', 'Owlbooks@gmai.com', '04337792', '2019-04-09 03:26:00', '2019-04-09 03:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qltv_docgia`
--

CREATE TABLE `qltv_docgia` (
  `id` int(10) UNSIGNED NOT NULL,
  `madocgia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendocgia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quequan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_id` int(10) UNSIGNED NOT NULL,
  `nganh_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_docgia`
--

INSERT INTO `qltv_docgia` (`id`, `madocgia`, `tendocgia`, `chucvu`, `gioitinh`, `namsinh`, `diachi`, `sdt`, `email`, `quequan`, `anh`, `khoa_id`, `nganh_id`) VALUES
(1, 'DG_786116', 'Hà', 'Sinh Viên', 'Nữ', '2003', '4221 Phố Mẫn Trúc Liễu, Phường Phương Trúc Diệp, Huyện Minh QuỳnhHải Phòng', '(84)(74)691-5061', 'giang50@mau.com', 'Turks and Caicos Islands', 'dm_thuongthucdoisong.jpg', 5, 2),
(2, 'DG_4502567', 'Anh', 'Giảng Viên', 'Nữ', '2024', '1600, Ấp Tôn, Phường Kim Lệ, Huyện Đan Lộc TrườngĐiện Biên', '(0129) 865 0315', 'duy.son@trac.com.vn', 'Sao Tome and Principe', 'dm_thieunhi.jpg', 2, 3),
(3, 'DG_230851', 'Hà', 'Giảng Viên', 'Nữ', '2010', '9, Ấp Lai Lam, Ấp Thoại Như, Quận CungNinh Thuận', '84-351-010-1985', 'adinh@gmail.com', 'Western Sahara', 'dm_ngoaingu.jpg', 5, 1),
(4, 'DG_499452', 'Giang', 'Giảng Viên', 'Nữ', '1971', '3477, Thôn 42, Phường Hoa, Quận Trà HoàiĐiện Biên', '+84-199-771-9019', 'wlo@ninh.com.vn', 'Indonesia', 'dm_vhnuocngoai.jpg', 10, 1),
(5, 'DG_766922', 'Khang', 'Sinh Viên', 'Nam', '1971', '032, Ấp 7, Xã Quyên, Huyện Phượng HồngQuảng Ninh', '0164 682 5941', 'dau.khoi@gmail.com', 'Niue', 'anh-dep-hinh-nen-thien-nhien-20.jpg', 1, 4),
(6, 'DG_581988', 'Giang', 'Giảng Viên', 'Nữ', '1975', '993, Ấp 99, Thôn Đường Kỳ, Huyện KhánhQuảng Trị', '0320-541-5280', 'mcu@hinh.net', 'Maldives', 'dm_kinnangsong.jpg', 8, 1),
(7, 'DG_755835', 'Giang', 'Sinh Viên', 'Nữ', '2010', '3775 Phố Nghĩa, Xã Thiều, Huyện Cổ Kiên ThờiHải Phòng', '027-686-2148', 'doan.hao@hotmail.com', 'Rwanda', 'dm_tuoiteen.jpg', 10, 5),
(8, 'DG_741865', 'Phượng', 'Sinh Viên', 'Nam', '2009', '4811 Phố Nghị Toại Tín, Phường 79, Quận 9Hà Nội', '(096) 411 4472', 'qdng@ha.com', 'Congo', '5_19__50698_thum_135.jpg', 5, 1),
(9, 'DG_107808', 'Khang', 'Giảng Viên', 'Nữ', '2020', '154, Thôn Việt Hiền, Xã Hằng Cúc, Quận KhêGia Lai', '061 673 1350', 'thoa.vien@gmail.com', 'Hungary', '21-chien-luoc-marketing-hang-dau__74151_thum_135.jpg', 4, 1),
(10, 'DG_175033', 'Tuấn', 'Giảng Viên', 'Nữ', '1990', '9 Phố Thịnh Đức Vi, Xã An An, Quận Tráng TuyềnVĩnh Phúc', '020-638-8184', 'u.do@yahoo.com', 'Russian Federation', '65313_05_03_19_death-note-tap-5__78069_thum.jpg', 9, 1),
(11, 'DG_45025673', 'dat', 'đafdsfdsf', 'nam', '1994', 'hnfcsdfsdf', '0397713172', 'dsa@gmail.com', 'ewqeewqeqw', 'th.jfif', 1, 1),
(12, 'DG_450256732323', '3213123', '312312', 'fdsa', '123213', '312312312', '3123123123123', '312312@gmial.com', 'ewqeewqeqw', 'th.jpg', 1, 1),
(13, 'DG_4502567323234444', 'eqweqwe', '312312', 'fdsf', '19944', '312312', '3213133333333333333333', 'd1sa@gmail.com', 'ewqeewqeqw', 'utt.sachquocgia.vn_The-gioi-nhin-nghieng-Bang-giao-ke-chuyen-b12613.html.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qltv_khoa`
--

CREATE TABLE `qltv_khoa` (
  `id` int(10) UNSIGNED NOT NULL,
  `makhoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkhoa` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_khoa`
--

INSERT INTO `qltv_khoa` (`id`, `makhoa`, `tenkhoa`) VALUES
(1, 'Khoa1', 'Quản trị kinh doanh'),
(2, 'Khoa2', 'Thương mại điện tử'),
(3, 'Khoa3', 'Tài chính – Ngân hàng'),
(4, 'Khoa4', 'Kế toán'),
(5, 'Khoa5', 'Hệ thống thông tin'),
(6, 'Khoa6', 'Công nghệ thông tin'),
(7, 'Khoa7', 'Công nghệ kỹ thuật công trình xây dựng'),
(8, 'Khoa8', 'Công nghệ kỹ thuật giao thông'),
(9, 'Khoa9', 'Công nghệ kỹ thuật Cơ khí'),
(10, 'Khoa10', 'Công nghệ kỹ thuật cơ điện tử'),
(11, 'Khoa11', 'Công nghệ kỹ thuật Ô tô'),
(12, 'Khoa12', 'Công nghệ kỹ thuật Điện tử - viễn thông'),
(13, 'Khoa13', 'CNKT môi trường'),
(14, 'Khoa14', 'Logistics và quản lý chuỗi cung ứng'),
(15, 'Khoa15', 'Kinh tế xây dựng'),
(16, 'Khoa16', 'Khai thác vận tải'),
(17, 'Khoa17', 'Quản lý xây dựng'),
(18, 'Khoa18', 'Luật'),
(19, 'Khoa19', 'Ngôn ngữ Anh');

-- --------------------------------------------------------

--
-- Table structure for table `qltv_muonsach`
--

CREATE TABLE `qltv_muonsach` (
  `id` int(10) UNSIGNED NOT NULL,
  `mamuon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaymuon` datetime NOT NULL,
  `hantra` tinyint(4) NOT NULL,
  `soluong` tinyint(4) NOT NULL,
  `ngaytra` datetime NOT NULL,
  `tinhtrang` tinyint(4) NOT NULL,
  `thuthu_id` int(10) UNSIGNED NOT NULL,
  `docgia_id` int(10) UNSIGNED NOT NULL,
  `sach_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_muonsach`
--

INSERT INTO `qltv_muonsach` (`id`, `mamuon`, `ngaymuon`, `hantra`, `soluong`, `ngaytra`, `tinhtrang`, `thuthu_id`, `docgia_id`, `sach_id`) VALUES
(1, 'MM_4749', '2023-12-09 15:08:52', 9, 19, '2024-07-06 10:17:13', 0, 5, 10, 1),
(2, 'MM_3625', '2024-05-17 21:46:29', 25, 8, '2023-09-09 10:23:56', 0, 3, 1, 1),
(3, 'MM_3524', '2024-07-02 22:02:17', 2, 15, '2023-08-20 10:10:39', 1, 4, 10, 7),
(4, 'MM_3339', '2024-07-18 12:41:25', 27, 11, '2023-10-05 12:52:29', 1, 2, 1, 8),
(5, 'MM_7940', '2024-01-10 21:58:14', 11, 6, '2023-12-06 16:21:19', 2, 3, 6, 2),
(6, 'MM_4246', '2024-01-22 04:06:06', 4, 15, '2024-03-06 19:15:17', 1, 1, 1, 1),
(7, 'MM_6004', '2023-08-03 08:15:19', 30, 13, '2023-12-17 08:06:50', 0, 2, 10, 4),
(8, 'MM_6280', '2024-06-18 08:35:07', 12, 19, '2024-04-14 02:52:28', 1, 3, 4, 1),
(9, 'MM_1173', '2024-06-03 23:54:55', 9, 13, '2023-12-10 10:17:24', 0, 5, 2, 8),
(10, 'MM_8220', '2024-05-02 11:06:51', 25, 7, '2023-08-07 18:32:18', 2, 2, 3, 9),
(11, '234234', '2024-08-06 04:54:19', 44, 33, '2024-09-19 04:54:19', 0, 1, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `qltv_nganh`
--

CREATE TABLE `qltv_nganh` (
  `id` int(10) UNSIGNED NOT NULL,
  `manganh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennganh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makhoa` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_nganh`
--

INSERT INTO `qltv_nganh` (`id`, `manganh`, `tennganh`, `makhoa`) VALUES
(1, 'Nganh1', 'Quản trị doanh nghiệp', 1),
(2, 'Nganh2', 'Quản trị Marketing', 1),
(3, 'Nganh3', 'Thương mại điện tử', 2),
(4, 'Nganh4', 'Tài chính doanh nghiệp', 3),
(5, 'Nganh5', 'Hải quan và Logistics', 3),
(6, 'Nganh6', 'Kế toán doanh nghiệp', 4),
(7, 'Nganh7', 'Hệ thống thông tin', 5),
(8, 'Nganh8', 'Công nghệ thông tin', 6),
(9, 'Nganh9', 'Trí tuệ nhân tạo và giao thông thông minh', 6),
(10, 'Nganh10', 'CNKT công trình xây dựng dân dụng và công nghiệp', 7),
(11, 'Nganh11', 'Xây dựng và quản lý hạ tầng đô thị', 7),
(12, 'Nganh12', 'Kiến trúc nội thất', 7),
(13, 'Nganh13', 'CNKT xây dựng Cầu đường bộ', 8),
(14, 'Nganh14', 'Hạ tầng giao thông đô thị thông minh', 8),
(15, 'Nganh15', 'Thanh tra và quản lý công trình giao thông', 8),
(16, 'Nganh16', 'CNKT xây dựng Đường sắt - Metro (*)', 8),
(17, 'Nganh17', 'Xây dựng Cầu – đường sắt (*)', 8),
(18, 'Nganh18', 'Quản lý, khai thác và bảo trì đường cao tốc (*)', 8),
(19, 'Nganh19', 'Mô hình thông tin công trình (BIM) trong dự án hạ tầng giao thông (*)', 8),
(20, 'Nganh20', 'CNKT Đầu máy - toa xe và tàu điện Metro', 9),
(21, 'Nganh21', 'CNKT Cơ khí tàu thủy và công trình nổi', 9),
(22, 'Nganh22', 'CNKT Máy xây dựng', 9),
(23, 'Nganh23', 'Công nghệ chế tạo máy', 9),
(24, 'Nganh24', 'Công nghệ kỹ thuật cơ điện tử', 10),
(25, 'Nganh25', 'Công nghệ kỹ thuật cơ điện tử trên ô tô', 10),
(26, 'Nganh26', 'Công nghệ kỹ thuật ô tô', 11),
(27, 'Nganh27', 'CNKT ô tô và giao thông thông minh', 11),
(28, 'Nganh28', 'Công nghệ kỹ thuật điện tử - viễn thông', 12),
(29, 'Nganh29', 'Công nghệ kỹ thuật vi mạch bán dẫn (*)', 12),
(30, 'Nganh30', 'Công nghệ và quản lý môi trường', 13),
(31, 'Nganh31', 'Logistics và quản lý chuỗi cung ứng', 14),
(32, 'Nganh32', 'Logistics và hạ tầng giao thông', 14),
(33, 'Nganh33', 'Kinh tế xây dựng', 15),
(34, 'Nganh34', 'Logistics và vận tải đa phương thức', 16),
(35, 'Nganh35', 'Quản lý và điều hành vận tải đường sắt (*)', 16),
(36, 'Nganh36', 'Quản lý xây dựng', 17),
(37, 'Nganh37', 'Luật ', 18),
(38, 'Nganh38', 'Ngôn ngữ Anh', 19),
(42, 'MTTVTT', 'Mạng máy tính và truyền thông dữ liệu', 6);

-- --------------------------------------------------------

--
-- Table structure for table `qltv_nxb`
--

CREATE TABLE `qltv_nxb` (
  `id` int(10) UNSIGNED NOT NULL,
  `manxb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tennxb` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_nxb`
--

INSERT INTO `qltv_nxb` (`id`, `manxb`, `tennxb`) VALUES
(1, 'NXB1', 'Công nghệ thông tin'),
(8, 'NXB2', 'Công trình'),
(9, 'NXB3', 'Cơ khí'),
(10, 'NXB4', 'Cơ sở kỹ thuật'),
(11, 'NXB5', 'Khoa học cơ bản'),
(12, 'NXB6', 'Kinh tế'),
(13, 'NXB7', 'Lý luận chính trị');

-- --------------------------------------------------------

--
-- Table structure for table `qltv_sach`
--

CREATE TABLE `qltv_sach` (
  `id` int(10) UNSIGNED NOT NULL,
  `masach` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensach` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentacgia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `namxuatban` smallint(5) UNSIGNED NOT NULL,
  `soluong` decimal(18,0) DEFAULT NULL,
  `trangthaisach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theloai_id` int(10) UNSIGNED NOT NULL,
  `nxb_id` int(10) UNSIGNED NOT NULL,
  `link_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_sach`
--

INSERT INTO `qltv_sach` (`id`, `masach`, `tensach`, `tentacgia`, `noidung`, `namxuatban`, `soluong`, `trangthaisach`, `anh`, `theloai_id`, `nxb_id`, `link_pdf`) VALUES
(1, 'Sach_954962', 'Thế giới nhìn nghiêng...Bang giao kể chuyện', 'Vũ Sơn Thủy', '', 0, '39', '1', 'TGN.png', 2, 1, 'pdf1.pdf'),
(2, 'Sach_555705', 'XÂY DỰNG VÀ PHÁT TRIỂN NỀN VĂN HÓA VIỆT NAM TIÊN TIẾN, ĐẬM ĐÀ BẢN SẮC DÂN TỘC', 'Hùng', '', 0, '95', '1', 'xdnvhvnttđbsdt.png', 5, 1, 'pdf2.pdf'),
(3, 'Sach_310117', 'Các quy định pháp luật hướng dẫn Luật Trọng tài thương mại', 'Quốc Hội', '', 0, '41', '1', 'cac-quy-dinh.png', 4, 1, 'pdf3.pdf'),
(4, 'Sach_828322', 'Việt Nam trước cạnh tranh chiến lược giữa hai nước lớn (Sách chuyên khảo)', 'Thiếu tướng, GS.TS. Nguyễn Hồng Quân', '', 0, '55', '1', 'VNT.png', 2, 1, 'pdf4.pdf'),
(5, 'Sach_246687', 'BÔNG SEN VÀNG', 'Sơn Tùng', '', 0, '37', '1', 'bsv.png', 1, 1, 'pdf5.pdf'),
(6, 'Sach_307195', 'Đi Theo Con Đường Của Bác', 'Giang', '', 0, '79', '1', 'di-theo-con-duong-cua-bac.png', 1, 1, 'pdf17.pdf'),
(7, 'Sach_842132', 'LUẬT CÔNG CHỨNG NĂM 2014', 'Hà Nguyễn', '', 0, '38', '1', 'lcc.png', 3, 1, 'pdf7.pdf'),
(8, 'Sach_175402', 'Tài liệu hướng dẫn đại hội chi bộ nhiệm kỳ 2022 - 2025', 'Tuấn', '', 0, '40', '1', 'daihoichibo.png', 1, 1, 'pdf6.pdf'),
(9, 'Sach_115136', 'Một số vấn đề lý luận và thực tiễn về đổi mới, phát triển đất nước', 'GS.TS. Nguyễn Xuân Thắng', '', 0, '33', '1', 'msvdll.png', 2, 1, ''),
(11, '4324324', 'Kiểm soát tài sản, thu nhập của đảng viên là người có chức vụ, quyền hạn trong bối cảnh mới ở Việt Nam (Sách chuyên khảo)', 'PGS.TS Nguyễn Thị Báo', '', 0, '32', '1', 'kststn.png', 4, 1, ''),
(229, 'DEMO1', 'Búp sen xanh', 'Sơn Tùng', '<p>Hi đ&acirc;y l&agrave; cuốn s&aacute;ch rất hay về cuộc đời của b&aacute;c Hồ</p>\r\n\r\n<p>Hi đ&acirc;y l&agrave; cuốn s&aacute;ch rất hay về cuộc đời của b&aacute;c Hồ</p>\r\n\r\n<p>Hi đ&acirc;y l&agrave; cuốn s&aacute;ch rất hay về cuộc đời của b&aacute;c Hồ</p>\r\n\r\n<p>Hi đ&acirc;y l&agrave; cuốn s&aacute;ch rất hay về cuộc đời của b&aacute;c Hồ</p>', 2020, NULL, '2', '1724260226_Tu-Duy-Mo.png', 2, 8, '1724260226_Tu duy mo 2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `qltv_theloai`
--

CREATE TABLE `qltv_theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `matheloai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentheloai` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_theloai`
--

INSERT INTO `qltv_theloai` (`id`, `matheloai`, `tentheloai`) VALUES
(1, 'TLoai1', 'Giáo trình, bài giảng'),
(2, 'TLoai2', 'Ebook, Tài liệu mở'),
(3, 'TLoai3', 'Khóa luận, Đồ án'),
(4, 'TLoai4', 'Luận văn, Luận án'),
(5, 'TLoai5', 'Hướng dẫn ôn tập'),
(6, 'TLoai6', 'Tài liệu Tiếng Anh'),
(8, 'TLoai8', 'Tài liệu nội sinh khác');

-- --------------------------------------------------------

--
-- Table structure for table `qltv_thuthu`
--

CREATE TABLE `qltv_thuthu` (
  `id` int(10) UNSIGNED NOT NULL,
  `mathuthu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenthuthu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namsinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quequan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoa_id` int(10) UNSIGNED NOT NULL,
  `nganh_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qltv_thuthu`
--

INSERT INTO `qltv_thuthu` (`id`, `mathuthu`, `tenthuthu`, `chucvu`, `gioitinh`, `namsinh`, `diachi`, `sdt`, `email`, `quequan`, `anh`, `khoa_id`, `nganh_id`) VALUES
(1, 'TT_736881', 'Hoàng', 'Sinh Viên', 'Nam', '2015', '7, Thôn Bì Thường Ngà, Ấp Lư Phúc, Huyện 3Nghệ An', '(84)(162)529-0511', 'bach.binh@mau.org', 'Equatorial Guinea', 'anh-thien-nhien-hang-dong-dep-nhat_041754196.jpg', 5, 1),
(2, 'TT_525376', 'Văn', 'Sinh Viên', 'Nữ', '1970', '584, Ấp 8, Thôn Thông Quang, Huyện Quân Đào\nLong An', '(84)(68)635-1020', 'lam51@yahoo.com', 'Puerto Rico', 'https://lorempixel.com/300/300/?74537', 8, 1),
(3, 'TT_220623', 'Bảo', 'Sinh Viên', 'Nữ', '2000', '329, Thôn Đường Hiếu, Thôn Lục Dung, Quận Ngôn\nBắc Kạn', '(033) 124 2669', 'vo.tong@c.com', 'Nicaragua', 'https://lorempixel.com/300/300/?95868', 1, 4),
(4, 'TT_490038', 'Bảo', 'Sinh Viên', 'Nam', '1988', '0473 Phố Tạ Hoán Nghị, Phường Phí, Huyện Thịnh\nGia Lai', '(0166)394-4855', 'utong@chu.com', 'Albania', 'https://lorempixel.com/300/300/?85940', 6, 2),
(5, 'TT_024856', 'Văn', 'Giảng Viên', 'Nam', '2018', '40, Ấp Ông Hội, Phường Hiền Khúc, Quận 5\nQuảng Ngãi', '(84)(29)078-3251', 'dong.le@yahoo.com', 'Nicaragua', 'https://lorempixel.com/300/300/?20048', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE `quangcao` (
  `maloaiquangcao` smallint(5) UNSIGNED NOT NULL,
  `tenquangcao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chitiet` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lienket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` tinyint(3) UNSIGNED NOT NULL,
  `ngaydang` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quangcao`
--

INSERT INTO `quangcao` (`maloaiquangcao`, `tenquangcao`, `anh`, `chitiet`, `lienket`, `thutu`, `ngaydang`, `created_at`, `updated_at`) VALUES
(1, 'slide', NULL, NULL, 'slide_img1.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img2.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img3.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img4.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img5.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img6.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img7.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img8.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img9.jpg', 1, '2019-04-10', NULL, NULL),
(1, 'slide', NULL, NULL, 'slide_img10.jpg', 1, '2019-04-10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `id` int(10) UNSIGNED NOT NULL,
  `maloai` tinyint(3) UNSIGNED NOT NULL,
  `manhaxuatban` tinyint(3) UNSIGNED NOT NULL,
  `tensach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` smallint(5) UNSIGNED DEFAULT NULL,
  `dongia` double(8,2) UNSIGNED DEFAULT NULL,
  `luotxem` smallint(6) DEFAULT 0,
  `luotmua` smallint(6) DEFAULT 0,
  `khuyenmai` tinyint(3) UNSIGNED DEFAULT 0,
  `anhbia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tap` smallint(5) UNSIGNED DEFAULT 0,
  `sotap` smallint(5) UNSIGNED DEFAULT 0,
  `link_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hidden` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id`, `maloai`, `manhaxuatban`, `tensach`, `tacgia`, `soluong`, `dongia`, `luotxem`, `luotmua`, `khuyenmai`, `anhbia`, `tap`, `sotap`, `link_pdf`, `hidden`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'HÔM NAY ĂN GÌ? - PHIÊN BẢN THÚ CƯNG', 'Debora Robertson', 30, 80000.00, 0, 0, NULL, '978604775892_1_1__60664_thum_135.jpg', NULL, NULL, '', 1, '2019-04-11 03:24:40', '2019-05-03 05:49:56'),
(2, 5, 3, 'Combo Harvard Business School', 'Mario Prickens', 30, 120000.00, 0, 0, 10, 'diem-doi-lua-2014__90791_thum_135.jpg', 1, 1, '', 0, '2019-04-14 14:13:52', '2019-04-22 07:54:25'),
(3, 1, 4, 'Độc Giả Và Nhân Vật Chính Đích Thị Là Chân Tình', 'Đồi', 30, 100000.00, 0, 0, 20, 'doc-gia-full__22843_image2_800_thum.jpg', 2, 10, '', 0, '2019-04-14 14:17:31', '2019-04-22 14:40:34'),
(4, 1, 1, 'Tiệm Đồ Cổ Á Xá', 'Huyền sắc', 30, 70000.00, 0, 0, 20, '74737_11_04_19_tiem-do-co-a-xa-tap-7-truyen-tranh__10110_thum_135.jpg', 7, 10, '', 0, '2019-04-14 17:05:42', '2019-04-14 17:05:42'),
(5, 2, 4, 'LÊN LỚP KHÔNG ĐƯỢC ĐỌC TIỂU THUYẾT', 'Cửu Bả Đao', 30, 100000.00, 0, 0, 10, 'b3hibgs8__35790_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(6, 2, 23, 'SỰ CỨU RỖI CỦA THÁNH NỮ', 'Higashino Keigo', 30, 128000.00, 0, 0, 20, 'pmccr6uj__52114_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(7, 2, 16, 'GIÂY THỨ 12', 'Sunness', 30, 102000.00, 0, 0, 10, 'image_184262__01189_thum_135.jpg', 1, 10, '', 0, NULL, NULL),
(8, 2, 4, 'ANH LÀ TẤT CẢ NHỮNG GÌ EM GHÉT NHẤT', 'Tiểu Bố Thích Ăn Bánh Trứng', 30, 109000.00, 0, 0, 18, 'anhlatatca.jpg', 0, 1, '', 0, NULL, NULL),
(9, 2, 20, 'EM LÀ TIỂU TIÊN NỮ CỦA ANH (BỘ 2 TẬP)', 'MaMa', 30, 236000.00, 0, 0, 20, 'f990211ab650d08d5e6d8d675f5b6a6e_1___26207_thum.jpg', 0, 1, '', 0, NULL, NULL),
(11, 1, 16, '[ Bản Thường] AMAGI CÔNG VIÊN RỰC RỠ', 'Gatou shouji', 30, 105000.00, 0, 0, 20, 'amagi-cong-vien-ruc-ro-2-cover__99202_image2_800_thum.jpg', 2, 15, '', 1, NULL, '2019-05-06 07:27:12'),
(12, 2, 26, 'Khi Nhìn Lên Trời Xanh, Tớ Sẽ Rất Nhớ Cậu', 'Septiny', 30, 79000.00, 0, 1, 15, '2414201971454_55575953_1255588541260243_6317788388657201152_n_591x960__17411_thum_135.jpg', 0, 1, '', 1, NULL, '2019-05-07 07:03:46'),
(13, 2, 17, 'HÃY MANG ANH TRAI TÔI ĐI', 'U Linh', 30, 109000.00, 0, 0, 23, 'anhtoi3_thuong_biaao_thumb__46882_thum_135.jpg', 3, 5, '', 0, NULL, NULL),
(14, 2, 17, 'HÃY MANG ANH TRAI TÔI ĐI', 'U Linh', 30, 109000.00, 0, 0, 90, 'anhtoi3_dacbiet_biaao_thumb__52183_thum_135.jpg', 2, 5, '', 0, NULL, '2019-05-09 07:51:46'),
(15, 2, 21, 'ÔNG THỊ TRƯỞNG Ở FURNES', 'Georges Simenon', 30, 98000.00, 0, 0, 13, 'nitby3km__75401_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(16, 2, 16, 'HỎI ĐÁP CÙNG EM - THẦN THOẠI', 'Anne Royer', 30, 175000.00, 0, 0, 16, '5rcxwb7n__53979_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(17, 2, 1, 'RE:LIFE', 'YayoiSo', 30, 75000.00, 0, 0, 17, 'relife5_biaao_thumb_2__42821_thum_135.jpg', 5, 20, '', 0, NULL, NULL),
(18, 2, 16, 'Bản Đặc Biệt - Ma Vương Kiến Tạo', 'Rui Tsukiyo', 30, 103000.00, 0, 0, 16, '1944201914420_bia_1_ma_vuong_t4_min_700x1000__89612_thum_135.jpg', 4, 20, '', 0, NULL, NULL),
(19, 2, 16, 'CON RỒNG TRONG BỂ KÍNH - CÂU CHUYỆN THẬT VỀ QUYỀN LỰC, NỖI ÁM ẢNH VÀ LOÀI CÁ ĐÁNG THÈM MUỐN NHẤT', 'Emily Voigt', 30, 130000.00, 0, 0, 15, 'image_181982__93342_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(20, 2, 24, 'HỒNG HẠNH THỔN THỨC', 'Tào Đình', 30, 118000.00, 0, 0, 12, 'image_183043__98454_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(21, 2, 15, 'VĂN HÀO LƯU LẠC', 'Asagiri Kafka - Harukawa Sango', 30, 35000.00, 0, 0, 12, 'bia_1_van_hao_10_2__96775_thum_135.jpg', 10, 18, '', 0, NULL, NULL),
(22, 2, 5, 'LẶNG YÊN DƯỚI VỰC SÂU', 'Đỗ Bích Thúy', 30, 58000.00, 0, 0, 10, 'yen-lag__75236_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(23, 2, 19, 'SỰ TRẢ THÙ CỦA QUÝ CÔ', 'Sarah MacLean', 30, 135000.00, 0, 0, 24, 'image_183042__50080_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(24, 2, 26, 'SWORD ART ONLINE PROGRESSIVE 003', 'Reki Kawahara', 30, 105000.00, 0, 0, 11, 'cover_1_sao_pro_3_2__40365_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(25, 2, 17, 'TINH LINH HUYỄN TƯỞNG KÝ', 'Yuri Kitayama', 30, 140000.00, 0, 0, 14, 'b_a-1-tinh-linh_1_1_1__85710_thum.jpg', 1, 7, '', 0, NULL, '2019-04-22 08:06:49'),
(26, 2, 14, 'Người Là Tháng Tư Của Thế Gian', 'Thanh La Phiến Tử', 30, 99000.00, 0, 0, 19, '22088_05_03_19_nguoi-la-thang-tu-cua-the-gian__36329_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(27, 2, 12, 'RE:LIFE', 'YayoiSo', 30, 75000.00, 0, 0, 15, 'relife4_biaao_thumb_2__00449_thum_135.jpg', 4, 20, '', 0, NULL, NULL),
(28, 2, 15, 'CÔ DÂU PHÁP SƯ	', 'Yamazaki Kore', 30, 35000.00, 0, 0, 15, 'bia-1-cdps-10_1_1__54002_thum_135.jpg', 10, 30, '', 0, NULL, NULL),
(29, 2, 12, 'ĐẸP TRAI LÀ SỐ 1', 'Lục Mang Tinh', 30, 100000.00, 0, 0, 23, 'dep-chai__26550_thum.jpg', 2, 5, '', 0, NULL, NULL),
(30, 2, 22, '[BẢN ĐẶC BIỆT] DEATH NOTE', 'Tsugumi Ohba, Takeshi ', 30, 120000.00, 0, 0, 16, '65313_05_03_19_death-note-tap-5__78069_thum.jpg', 5, 10, '', 0, NULL, NULL),
(31, 1, 26, 'Độc Giả Và Nhân Vật Chính Đích Thị Là Chân Tình', 'Đồi', 30, 89000.00, 0, 0, 14, '65313_05_03_19_death-note-tap-5__78069_thum.jpg', 2, 10, '', 0, NULL, NULL),
(32, 1, 7, '[Trọn Bộ] Độc Giả Và Nhân Vật Chính Đích THị Là Chân Tình (5tập )', 'Đồi', 30, 518000.00, 0, 0, 11, 'doc-gia-full__22843_image2_800_thum.jpg', 0, 5, '', 0, NULL, NULL),
(33, 1, 15, 'DẠ ĐỀ', 'Chi Li Anh Chước', 30, 118000.00, 0, 0, 13, 'bia_1_2_8__15635_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(34, 1, 20, 'Xú Hoàng (Trọn Bộ 3 Tập)', 'Dịch Nhân Bắc', 30, 219000.00, 0, 0, 15, 'xu-hoang__17725_image2_800_thum.jpg', 0, 3, '', 0, NULL, NULL),
(35, 1, 16, 'Loạn Thế Vi Vương – Trọn Bộ 4 Tập (Tặng Kèm Poster, Số Lượng Có Hạn)', 'Cố Tuyết Nhu', 30, 462000.00, 0, 0, 14, 'loan-the-vi-vuong-1__92808_thum_135.jpg', 0, 4, '', 0, NULL, NULL),
(36, 1, 6, 'Loạn Thế Vi Vương – Trọn Bộ 4 Tập (Tặng Kèm Poster, Số Lượng Có Hạn)', 'Cố Tuyết Nhu', 30, 462000.00, 0, 0, 13, 'loan-the-vi-vuong-1__92808_thum_135.jpg', 0, 4, '', 0, NULL, NULL),
(37, 1, 19, 'VĂN HÀO LƯU LẠC', 'Asagiri Kafka - Harukawa Sango', 30, 35000.00, 0, 0, 24, 'bia_1_van_hao_10_2__96775_thum_135.jpg', 10, 20, '', 0, NULL, NULL),
(38, 1, 16, 'Độc Giả Và Nhân Vật Chính Đích Thị Là Chân Tình', 'Đồi', 30, 99000.00, 0, 0, 13, 'doc-gia-tap-1-full__47007_thum.jpg', 1, 5, '', 0, NULL, NULL),
(39, 1, 15, 'Archimedes Thân Yêu (Trọn Bộ 2 Tập)', 'Cửu Nguyệt Hi', 30, 219000.00, 0, 0, 23, 'archimedes-than-yeu__70147_thum_135.jpg', 0, 2, '', 0, NULL, NULL),
(40, 1, 16, 'Quỷ Hành Thiên Hạ', 'Nhĩ Nhã', 30, 190000.00, 0, 0, 12, 'quy-hanh-thien-ha-tap-6__64425_thum_135.jpg', 6, 8, '', 0, NULL, NULL),
(41, 1, 12, '[ Bản thường] AMAGI CÔNG VIÊN RỰC RỠ', 'Gatou shouji', 30, 130000.00, 0, 0, 14, 'amagi-cong-vien-ruc-ro-2-cover__43670_image2_800_thum.jpg', 2, 2, '', 0, NULL, NULL),
(42, 1, 2, 'Túi canvas chibi SCI 4 - sát thủ phi nhân loại', 'Nhĩ Nhã', 30, 154000.00, 0, 0, 12, 'tui-sci-chibi__34828_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(43, 1, 10, 'Tiệm Quan Tài Số 7 (Trọn Bộ 2 Tập)', 'Niệm Tiểu Duệ', 30, 219000.00, 0, 0, 10, 'tiem-quan-tai-so-7-tap-1__72791_image2_800_thum.jpg', 0, 2, '', 0, NULL, NULL),
(44, 1, 28, 'SWORD ART ONLINE PROGRESSIVE 003	', 'Reki Kawahara', 30, 159000.00, 0, 0, 21, 'cover_1_sao_pro_3_2__40365_thum_135.jpg', 0, 3, '', 0, NULL, NULL),
(45, 1, 7, 'Vũ Điệu Của Làn Da', 'Okyanmama', 30, 109000.00, 0, 0, 13, 'vu-dieu-lan-da__77406_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(46, 1, 4, 'Mãi Mãi Là Bao Xa (Tái Bản 2015, Bổ Sung Ngoại Truyện Mới)', 'Diệp Lạc Vô Tâm', 30, 126000.00, 0, 0, 22, 'mai-mai-la-bao-xa__89605_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(47, 1, 29, 'Tháng Năm Qua', 'Tĩnh Thủy Biên', 30, 125000.00, 0, 0, 11, '_thang-nam-qua__47480_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(48, 1, 6, 'Anh Hùng Ca', 'Lại Nhĩ', 30, 219000.00, 0, 0, 15, 'anh-hung-ca-tap-1__03619_thum_135.jpg', 1, 10, '', 0, NULL, NULL),
(49, 1, 16, 'Sự Trỗi Dậy Và Suy Tàn Của Đế Chế Thứ Ba - Lịch Sử Đức Quốc Xã', 'William L. Shirer', 30, 219000.00, 0, 0, 20, 'de-che-thu-3__65097_thum_135.jpg', 0, 1, '', 1, NULL, NULL),
(50, 1, 19, 'Người Sống Sót', 'Tần Minh', 30, 159000.00, 0, 0, 14, 'nguoi-song-sot__26195_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(51, 1, 28, 'Nhóc Nicolas: Những Chuyện Chưa Kể ', 'Goscinny', 30, 109000.00, 0, 0, 23, 'nhoc-nicolas-nhung-chuyen-chua-ke-tap-3__74732_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(52, 1, 23, 'RE:LIFE', 'YayoiSo', 30, 75000.00, 0, 0, 16, 'relife5_biaao_thumb_2__42821_thum_135.jpg', 5, 10, '', 0, NULL, NULL),
(53, 1, 13, 'Blonote', 'Tablo', 30, 98000.00, 0, 0, 19, 'blonote__18658_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(54, 1, 21, 'BẢY NGÀY ĐẾM NGƯỢC', 'Cát Bốc Lặc', 30, 119000.00, 0, 0, 24, 'bay-ngay-dem-nguoc-bia_1_1__38490_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(55, 1, 24, 'Tiệm Đồ Cổ Á Xá', 'Huyền Sắc', 30, 15000.00, 0, 0, 10, '74737_11_04_19_tiem-do-co-a-xa-tap-7-truyen-tranh__10110_thum_135.jpg', 7, 10, '', 0, NULL, NULL),
(56, 1, 8, 'Quỷ Hành Thiên Hạ', 'Nhĩ Nhã', 30, 200000.00, 0, 0, 14, 'quy-hanh-thien-ha-tap-78__57797_thum_135.jpg', 7, 8, '', 0, NULL, NULL),
(57, 1, 14, 'Đừng Lãng Phí Những Ngày Đẹp Trời', 'Jinie Lynk', 30, 78000.00, 0, 0, 16, 'dung-lang-phi-nhung-ngay-dep-troi__01172_thum_135.jpg', 0, 1, '', 0, NULL, NULL),
(58, 5, 4, 'Chiến Tranh Tiền Tệ - Tái Bản 2017', 'Song Hong Bing', 30, 150000.00, 0, 0, 32, '973976466.jpg', 0, 1, '', 0, '2019-04-20 15:09:57', '2019-04-20 15:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen_tk` int(11) NOT NULL DEFAULT 1,
  `khoa_id` int(10) UNSIGNED NOT NULL,
  `nganh_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `quyen_tk`, `khoa_id`, `nganh_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PyxJp/5zr3EtxgoHtnsc.egJBx4ApXX3m1h8VLI8XHtFtwjjnfKtG', NULL, 1, 6, 42, '2024-08-17 21:21:07', '2024-08-17 21:21:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsach`
--
ALTER TABLE `chitietsach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietsach_masach_foreign` (`masach`),
  ADD KEY `chitietsach_mangonngu_foreign` (`mangonngu`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaiquangcao`
--
ALTER TABLE `loaiquangcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaisach_madanhmuc_foreign` (`madanhmuc`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `qltv_docgia`
--
ALTER TABLE `qltv_docgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qltv_docgia_khoa_id_foreign` (`khoa_id`),
  ADD KEY `qltv_docgia_nganh_id_foreign` (`nganh_id`);

--
-- Indexes for table `qltv_khoa`
--
ALTER TABLE `qltv_khoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qltv_muonsach`
--
ALTER TABLE `qltv_muonsach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qltv_muonsach_thuthu_id_foreign` (`thuthu_id`),
  ADD KEY `qltv_muonsach_docgia_id_foreign` (`docgia_id`),
  ADD KEY `qltv_muonsach_sach_id_foreign` (`sach_id`);

--
-- Indexes for table `qltv_nganh`
--
ALTER TABLE `qltv_nganh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nganh_khoa_id_foreign` (`makhoa`) USING BTREE;

--
-- Indexes for table `qltv_nxb`
--
ALTER TABLE `qltv_nxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qltv_sach`
--
ALTER TABLE `qltv_sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qltv_sach_theloai_id_foreign` (`theloai_id`),
  ADD KEY `qltv_sach_nxb_id_foreign` (`nxb_id`);

--
-- Indexes for table `qltv_theloai`
--
ALTER TABLE `qltv_theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qltv_thuthu`
--
ALTER TABLE `qltv_thuthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qltv_thuthu_khoa_id_foreign` (`khoa_id`),
  ADD KEY `qltv_thuthu_nganh_id_foreign` (`nganh_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_khoa_id_foreign` (`khoa_id`),
  ADD KEY `user_nganh_id_foreign` (`nganh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsach`
--
ALTER TABLE `chitietsach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `qltv_docgia`
--
ALTER TABLE `qltv_docgia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `qltv_khoa`
--
ALTER TABLE `qltv_khoa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `qltv_muonsach`
--
ALTER TABLE `qltv_muonsach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `qltv_nganh`
--
ALTER TABLE `qltv_nganh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `qltv_nxb`
--
ALTER TABLE `qltv_nxb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `qltv_sach`
--
ALTER TABLE `qltv_sach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `qltv_theloai`
--
ALTER TABLE `qltv_theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `qltv_thuthu`
--
ALTER TABLE `qltv_thuthu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `qltv_docgia`
--
ALTER TABLE `qltv_docgia`
  ADD CONSTRAINT `qltv_docgia_khoa_id_foreign` FOREIGN KEY (`khoa_id`) REFERENCES `qltv_khoa` (`id`),
  ADD CONSTRAINT `qltv_docgia_nganh_id_foreign` FOREIGN KEY (`nganh_id`) REFERENCES `qltv_nganh` (`id`);

--
-- Constraints for table `qltv_muonsach`
--
ALTER TABLE `qltv_muonsach`
  ADD CONSTRAINT `qltv_muonsach_docgia_id_foreign` FOREIGN KEY (`docgia_id`) REFERENCES `qltv_docgia` (`id`),
  ADD CONSTRAINT `qltv_muonsach_sach_id_foreign` FOREIGN KEY (`sach_id`) REFERENCES `qltv_sach` (`id`),
  ADD CONSTRAINT `qltv_muonsach_thuthu_id_foreign` FOREIGN KEY (`thuthu_id`) REFERENCES `qltv_thuthu` (`id`);

--
-- Constraints for table `qltv_nganh`
--
ALTER TABLE `qltv_nganh`
  ADD CONSTRAINT `nganh_khoa_id_foreign` FOREIGN KEY (`makhoa`) REFERENCES `qltv_khoa` (`id`);

--
-- Constraints for table `qltv_sach`
--
ALTER TABLE `qltv_sach`
  ADD CONSTRAINT `qltv_sach_nxb_id_foreign` FOREIGN KEY (`nxb_id`) REFERENCES `qltv_nxb` (`id`),
  ADD CONSTRAINT `qltv_sach_theloai_id_foreign` FOREIGN KEY (`theloai_id`) REFERENCES `qltv_theloai` (`id`);

--
-- Constraints for table `qltv_thuthu`
--
ALTER TABLE `qltv_thuthu`
  ADD CONSTRAINT `qltv_thuthu_khoa_id_foreign` FOREIGN KEY (`khoa_id`) REFERENCES `qltv_khoa` (`id`),
  ADD CONSTRAINT `qltv_thuthu_nganh_id_foreign` FOREIGN KEY (`nganh_id`) REFERENCES `qltv_nganh` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_khoa_id_foreign` FOREIGN KEY (`khoa_id`) REFERENCES `qltv_khoa` (`id`),
  ADD CONSTRAINT `user_nganh_id_foreign` FOREIGN KEY (`nganh_id`) REFERENCES `qltv_nganh` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
