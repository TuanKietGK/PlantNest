-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 04:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polido`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_ad`, `username`, `password`) VALUES
(1, 'admin1', '1234567890'),
(2, 'admin2', '1234567890'),
(5, 'admin3', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `banner` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `banner`) VALUES
(2, 'img/banner1.jpg'),
(3, 'img/banner2.jpg'),
(4, 'img/banner3.jpg'),
(5, 'img/banner4.jpg'),
(6, 'img/banner5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet`
--

CREATE TABLE `chitiet` (
  `id_chitiet` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `anh1` varchar(100) DEFAULT NULL,
  `anh2` varchar(100) DEFAULT NULL,
  `anh3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiet`
--

INSERT INTO `chitiet` (`id_chitiet`, `id_sp`, `anh1`, `anh2`, `anh3`) VALUES
(1, 1, 'img/Polo_tay_theu_chu_Ceffylo_(polo_tay_theu_chu_ceff_1).jpg', 'img/Polo_tay_theu_chu_Ceffylo_(polo_tay_theu_chu_ceff_2).jpg', 'img/Polo_tay_theu_chu_Ceffylo_(polo_tay_theu_chu_ceff_cm).jpg'),
(2, 2, 'img/Polo_co_tui_Ceffylo_(polo_tui_ceff_1).jpg', 'img/Polo_co_tui_Ceffylo_(polo_tui_ceff_2).jpg', 'img/Polo_co_tui_Ceffylo_(polo_tui_ceff_3).jpg'),
(3, 3, 'img/Phong_tron_cotton_Ceffylo_(phong_tron_cotton_ceffylo_0).jpg', 'img/Phong_tron_cotton_Ceffylo_(phong_tron_cotton_ceffylo_2).jpg', 'img/Phong_tron_cotton_Ceffylo_(phong_tron_cotton_ceffylo_3).jpg'),
(4, 4, 'img/Polo_tay_phoi_bo_in_ke_Ceffylo_(polo_pbinke_2).jpg', 'img/Polo_tay_phoi_bo_in_ke_Ceffylo_(polo_pbinke_3).jpg', 'img/Polo_tay_phoi_bo_in_ke_Ceffylo_(polo_pbinke_4).jpg'),
(5, 5, 'img/Polo_phoi_bo_Ceffylo_(polo_phoi_bo_ceff_1).jpg', 'img/Polo_phoi_bo_Ceffylo_(polo_phoi_bo_ceff_2).jpg', 'img/Polo_phoi_bo_Ceffylo_(polo_phoi_bo_ceff_3).jpg'),
(6, 6, 'img/Polo_tron_phoi_bo_Ceffylo_(polo_tron_phoi_bo_cef_3).jpg', 'img/Polo_tron_phoi_bo_Ceffylo_(polo_tronpb_2).jpg', 'img/Polo_tron_phoi_bo_Ceffylo_(polo_tronpb_4).jpg'),
(7, 7, 'img/Polo_in_ke_soc_Ceffylo_(polo_in_ke_soc_ceffff_2).jpg', 'img/Polo_in_ke_soc_Ceffylo_(polo_in_ke_soc_ceffff_3).jpg', 'img/Polo_in_ke_soc_Ceffylo_(polo_in_ke_soc_ceffff_4).jpg'),
(8, 8, 'img/Ao_phong_nguc_in_chu_Ceffylo_2_(ao_phong_nguc_in_chu2_2).jpg', 'img/Ao_phong_nguc_in_chu_Ceffylo_2_(ao_phong_nguc_in_chu2_3).jpg', ''),
(9, 9, 'img/Ao_phong_nguc_in_chu_Ceffylo_1_(ao_phong_nguc_in_chu1_2).jpg', 'img/Ao_phong_nguc_in_chu_Ceffylo_1_(ao_phong_nguc_in_chu1_3).jpg', 'img/Ao_phong_nguc_in_chu_Ceffylo_1_(ao_phong_nguc_in_chu1_4).jpg'),
(10, 10, 'img/Quan_au_ke_soc_Ceffylo_(quan_au_ke_socc_ceff_1).jpg', 'img/Quan_au_ke_soc_Ceffylo_(quan_au_ke_socc_ceff_2).jpg', 'img/Quan_au_ke_soc_Ceffylo_(quan_au_ke_socc_ceff_3).jpg'),
(11, 11, 'img/Quan_au_Baggy_soc_Polido_(quan_au_baggy_soc_polidoo).jpg', 'img/Quan_au_Baggy_soc_Polido_(quan_au_baggy_soc_polidoo_1).jpg', 'img/Quan_au_Baggy_soc_Polido_(quan_au_baggy_soc_polidoo_2).jpg'),
(12, 12, 'img/Quan_au_tron_Ceffylo_(quanautroncef_5).jpg', 'img/Quan_au_tron_Ceffylo_(quanautroncef_2).jpg', 'img/Quan_au_tron_Ceffylo_(quanautroncef_3).jpg'),
(13, 13, 'img/Ceffylo_hidden_button_pant_(hidden_button_pant_2).jpg', 'img/Ceffylo_hidden_button_pant_(hidden_button_pant_3).jpg', 'img/Ceffylo_hidden_button_pant_(hidden_button_pant_4).jpg'),
(14, 14, 'img/Quan_au_baggy_soc_Ceffylo_(baggy_soc_ceff_grc_2).jpg', 'img/Quan_au_baggy_soc_Ceffylo_(baggy_soc_ceff_grc_6).jpg', 'img/Quan_au_baggy_soc_Ceffylo_(baggy_soc_ceff_lg_2).jpg'),
(15, 15, 'img/Quan_au_phoi_soc_Ceffylo_(quan_au_phoi_soc_2).jpg', 'img/Quan_au_phoi_soc_Ceffylo_(quan_au_phoi_soc_3).jpg', 'img/Quan_au_phoi_soc_Ceffylo_(quan_au_phoi_soc_4).jpg'),
(16, 16, 'img/Quan_au_C467_POLIDO_(quan_au_c467_polidoo).jpg', 'img/Quan_au_C467_POLIDO_(quan_au_c467_polidoo_1).jpg', 'img/Quan_au_C467_POLIDO_(quan_au_c467_polidoo_2).jpg'),
(17, 17, 'img/quan_au_79_zara_indi_02.jpg', 'img/quan_au_79_zara_ms_01.jpg', 'img/Quan_au_79_ZARA_(quanau79zr_0).jpg'),
(18, 18, 'img/Quan_au_79_POLIDO_(quan_au_79_polidooo).jpg', 'img/Quan_au_79_POLIDO_(quan_au_79_polidooo_2).jpg', 'img/Quan_au_79_POLIDO_(quan_au_79_polidooo_3).jpg'),
(19, 19, 'img/SM_ke_Ceffylo_2_(sm_keceff1_1).jpg', 'img/SM_ke_Ceffylo_2_(sm_keceff1_2).jpg', 'img/SM_ke_Ceffylo_2_(sm_keceff1_3).jpg'),
(20, 20, 'img/SM_dai_tay_ke_phoi_Ceffylo_(sm_ke_phoi_ceff_1).jpg', 'img/SM_dai_tay_ke_phoi_Ceffylo_(sm_ke_phoi_ceff_2).jpg', 'img/SM_dai_tay_ke_phoi_Ceffylo_(sm_ke_phoi_ceff_3).jpg'),
(21, 21, 'img/SM_ke_Ceffylo_1_(sm_ke_ceff_1_0).jpg', 'img/SM_ke_Ceffylo_1_(sm_ke_ceff_1_2).jpg', 'img/SM_ke_Ceffylo_1_(sm_ke_ceff_1_3).jpg'),
(22, 22, 'img/SM_dai_tay_ke_soc_nho_Ceffylo_(sm_ke_soc_nho_ceff_1).jpg', 'img/SM_dai_tay_ke_soc_nho_Ceffylo_(sm_ke_soc_nho_ceff_2).jpg', 'img/SM_dai_tay_ke_soc_nho_Ceffylo_(sm_ke_soc_nho_ceff_3).jpg'),
(23, 23, 'img/SM_van_chim_ke_cheo_Ceffylo_(sm_vanchim_ke_cheo_ceff_1).jpg', 'img/SM_van_chim_ke_cheo_Ceffylo_(sm_vanchim_ke_cheo_ceff_2).jpg', 'img/SM_van_chim_ke_cheo_Ceffylo_(sm_vanchim_ke_cheo_ceff_3).jpg'),
(24, 24, 'img/SM_hoa_tiet_Ceffylo_1_(sm_ht_ceff1_2).jpg', 'img/SM_hoa_tiet_Ceffylo_1_(sm_ht_ceff1_3).jpg', 'img/SM_hoa_tiet_Ceffylo_1_(sm_ht_ceff1_4).jpg'),
(25, 25, 'img/SM_bamboo_ke_soc_Ceffylo_(sm_soc_ceff_2).jpg', 'img/SM_bamboo_ke_soc_Ceffylo_(sm_soc_ceff_3).jpg', 'img/SM_bamboo_ke_soc_Ceffylo_(sm_soc_ceff_4).jpg'),
(26, 26, 'img/SM_tron_bamboo_Ceffylo_(sm_troncefff_6).jpg', 'img/SM_tron_bamboo_Ceffylo_(sm_troncefff_7).jpg', 'img/SM_tron_bamboo_Ceffylo_(sm_troncefff_1).jpg'),
(27, 27, 'img/SM_dai_tay_tron_basic_Ceffylo_(sm_dt_tronbsceffylo_gr_1).jpg', 'img/SM_dai_tay_tron_basic_Ceffylo_(sm_dt_tronbsceffylo_bl_2).jpg', 'img/SM_dai_tay_tron_basic_Ceffylo_(sm_dt_tronbsceffylo_lb_5).jpg'),
(28, 28, 'img/Quan_khaki_tui_cheo_Ceffylo_(qu_kk_tui_cheo_1).jpg', 'img/Quan_khaki_tui_cheo_Ceffylo_(qu_kk_tui_cheo_2).jpg', 'img/Quan_khaki_tui_cheo_Ceffylo_(qu_kk_tui_cheo_3).jpg'),
(29, 29, 'img/Quan_khaki_tui_ngang_Ceffylo_(quan_kk_tui_ngang_1).jpg', 'img/Quan_khaki_tui_ngang_Ceffylo_(quan_kk_tui_ngang_2).jpg', 'img/Quan_khaki_tui_ngang_Ceffylo_(quan_kk_tui_ngang_3).jpg'),
(30, 30, 'img/Chinos_jeans_Ceffylo_(chinos_jeann_ceff_be_2).jpg', 'img/Chinos_jeans_Ceffylo_(chinos_jeann_ceff_bl_2).jpg', 'img/Chinos_jeans_Ceffylo_(chinos_jeann_ceff_ch_6).jpg'),
(31, 31, 'img/Chinos_basic_Ceffylo_(chinos_basic_ceffyloo_cm_1).jpg', 'img/Chinos_basic_Ceffylo_(chinos_basic_ceffyloo_bl_3).jpg', 'img/Chinos_basic_Ceffylo_(chinos_basic_ceffyloo_cm_4).jpg'),
(32, 32, 'img/Jogger_khaki_Ceffylo_(joggerkkceff_1).jpg', 'img/Jogger_khaki_Ceffylo_(joggerkkceff_2).jpg', 'img/Jogger_khaki_Ceffylo_(joggerkkceff_3).jpg'),
(33, 33, 'img/Jogger_kaki_tui_khoa_PullBear_(jogger_khaki_tui_khoa_pb_1).jpg', 'img/Jogger_kaki_tui_khoa_PullBear_(jogger_khaki_tui_khoa_pb_bl).jpg', 'img/Jogger_kaki_tui_khoa_PullBear_(jogger_khaki_tui_khoa_pb_br).jpg'),
(34, 34, 'img/Chinos_basic_ZARA_(chinos_bs_zra_2).jpg', 'img/Chinos_basic_ZARA_(chinos_bs_zra_3).jpg', 'img/Chinos_basic_ZARA_(chinos_basic_zraa_01).jpg'),
(35, 35, 'img/Chinos_jeans_Topman_(chinos_jeans_tmman_01).jpg', 'img/Chinos_jeans_Topman_(chinos_jeans_tmman_02).jpg', 'img/Chinos_jeans_Topman_(chinos_jeans_tmman_04).jpg'),
(36, 36, 'img/Quan_jeans_rach_Super_Brother_(jeans_rach_superbrother_1).jpg', 'img/Quan_jeans_rach_Super_Brother_(jeans_rach_superbrother_2).jpg', 'img/Quan_jeans_rach_Super_Brother_(jeans_rach_superbrother_3).jpg'),
(37, 37, 'img/Quan_jeans_rach_goi_Ceffylo_(quan_jean_rach_ceffylo_1).jpg', 'img/Quan_jeans_rach_goi_Ceffylo_(quan_jean_rach_ceffylo_dgn).jpg', 'img/Quan_jeans_rach_goi_Ceffylo_(quan_jean_rach_ceffylo_2).jpg'),
(38, 38, 'img/Quan_Jeans_tron_Ceffylo_1_(jeans_troncefff_1_2).jpg', 'img/Quan_Jeans_tron_Ceffylo_1_(jeans_troncefff_1_3).jpg', 'img/Quan_Jeans_tron_Ceffylo_1_(jeans_troncefff_1_4).jpg'),
(39, 39, 'img/Quan_jeans_rach_Ceffylo_(jeans_rach_ceffylo_bl_1).jpg', 'img/Quan_jeans_rach_Ceffylo_(jeans_rach_ceffylo_grl_4).jpg', 'img/Quan_jeans_rach_Ceffylo_(jeans_rach_ceffylo_lg_3).jpg'),
(40, 40, 'img/Quan_jeans_tron_basic_Ceffylo_(jeans_tronbs_ceffylo_bl_1).jpg', 'img/Quan_jeans_tron_basic_Ceffylo_(jeans_tronbs_ceffylo_bl_5).jpg', 'img/Quan_jeans_tron_basic_Ceffylo_(jeans_tronbs_ceffylo_dgn_2).jpg'),
(41, 41, 'img/Quan_jeans_tron_Ceffylo_(quanjeanstron_ceff).jpg', '', ''),
(42, 42, 'img/Quan_dai_dui_basic_HM_(quan_dai_dui_hm_2).jpg', 'img/Quan_dai_dui_basic_HM_(quan_dai_dui_hm_3).jpg', 'img/Quan_dai_dui_basic_HM_(quan_dai_dui_hm_4).jpg'),
(43, 43, 'img/Shorts_khaki_tron_Ceffylo_(shorts_khaki_tron_ceffylo_1).jpg', 'img/Shorts_khaki_tron_Ceffylo_(shorts_khaki_tron_ceffylo_2).jpg', 'img/Shorts_khaki_tron_Ceffylo_(shorts_khaki_tron_ceffylo_3).jpg'),
(44, 44, 'img/Shorts_khaki_tron_HM_(short_khakihm_1).jpg', 'img/Shorts_khaki_tron_HM_(short_khakihm_lg).jpg', 'img/Shorts_khaki_tron_HM_(short_khakihm_2).jpg'),
(45, 45, 'img/Shorts_dui_cap_chun_HM_(short_duicapchun_hm_1).jpg', 'img/Shorts_dui_cap_chun_HM_(short_duicapchun_hm_wh).jpg', 'img/Shorts_dui_cap_chun_HM_(short_duicapchun_hm_2).jpg'),
(46, 46, 'img/Polo_HT_in_tran_cham_bi_Ceffylo_(polo_ht_in_tran_chambi_1).jpg', 'img/Polo_HT_in_tran_cham_bi_Ceffylo_(polo_ht_in_tran_chambi_2).jpg', 'img/Polo_HT_in_tran_cham_bi_Ceffylo_(polo_ht_in_tran_chambi_3).jpg'),
(47, 47, 'img/Phong_coc_tay_tron_Ceffylo_(ao_phong_coc_tay_bs_ceff_1).jpg', 'img/Phong_coc_tay_tron_Ceffylo_(ao_phong_coc_tay_bs_ceff_2).jpg', 'img/Phong_coc_tay_tron_Ceffylo_(phong_tron_basic_ceff_1).jpg'),
(48, 48, 'img/Polo_HT_in_tran_CF_(polointrancf_1).jpg', 'img/Polo_HT_in_tran_CF_(polointrancf_2).jpg', 'img/Polo_HT_in_tran_CF_(polointrancf_3).jpg'),
(49, 49, 'img/Ao_phong_tron_basic_Ceffylo_(ao_phong_coc_tron_bs_ceff_bl_1).jpg', 'img/Ao_phong_tron_basic_Ceffylo_(ao_phong_coc_tron_bs_ceff_gr_2).jpg', 'img/Ao_phong_tron_basic_Ceffylo_(ao_phong_coc_tron_bs_ceff_nv_5).jpg'),
(50, 50, 'img/Polo_tron_basic_Ceffylo_(polo_tron_bs_ceff_5).jpg', 'img/Polo_tron_basic_Ceffylo_(polo_tron_bs_ceff_2).jpg', 'img/Polo_tron_basic_Ceffylo_(polo_tron_bs_ceff_3).jpg'),
(51, 51, 'img/Ao_phong_coc_tay_ke_ngang_Ceffylo_(phong_coc_ke_cef_2).jpg', 'img/Ao_phong_coc_tay_ke_ngang_Ceffylo_(phong_coc_ke_cef_5).jpg', 'img/Ao_phong_coc_tay_ke_ngang_Ceffylo_(phong_coc_ke_cef_1).jpg'),
(52, 52, 'img/Quan_au_soc_Polido_(quan_au_soc_polido_02).jpg', 'img/Quan_au_soc_Polido_(quan_au_soc_polido_03).jpg', 'img/Quan_au_soc_Polido_(quan_au_soc_polido_1).jpg'),
(53, 53, 'img/QUAN_AU_tron_K2_MANGO_(quan_au_k2_mango).jpg', 'img/QUAN_AU_tron_K2_MANGO_(quan_au_tron_k2_mango_01).jpg', 'img/QUAN_AU_tron_K2_MANGO_(quan_au_tron_k2_mango_bl).jpg'),
(54, 54, 'img/quan-au-soc-ceffylo-bl-02.jpg', 'img/quan-au-soc-ceffylo-gr-01.jpg', 'img/quan-au-soc-ceffylo-lg-03.jpg'),
(55, 55, 'img/Quan_au_caro_CEFFYLO_(quan_aucarro_ceff_2).jpg', 'img/Quan_au_caro_CEFFYLO_(quan_aucarro_ceff_3).jpg', 'img/Quan_au_caro_CEFFYLO_(quan_aucarro_ceff_4).jpg'),
(56, 56, 'img/Quan_au_xan_gau_C_467_CEFFYLO_(quan_au_xan_gau_c467_ceff).jpg', 'img/Quan_au_xan_gau_C_467_CEFFYLO_(quan_au_xan_gau_c467_ceff_1).jpg', 'img/Quan_au_xan_gau_C_467_CEFFYLO_(quan_au_xan_gau_c467_ceff_2).jpg'),
(57, 57, 'img/Quan_au_dai_79_Zara_(quan_ai_dai_79_zrr).jpg', 'img/quan_au_dai_79_zr.jpg', ''),
(58, 58, 'img/SM_jeans_tron_Ceffylo_(smjeanscefffloo_2).jpg', 'img/SM_jeans_tron_Ceffylo_(smjeanscefffloo_3).jpg', 'img/SM_jeans_tron_Ceffylo_(smjeanscefffloo_4).jpg'),
(59, 59, 'img/SM_trang_van_chim_Laurent_Taylor_(smvanchim_alu_2).jpg', 'img/SM_trang_van_chim_Laurent_Taylor_(smvanchim_alu_3).jpg', 'img/SM_trang_van_chim_Laurent_Taylor_(smvanchim_alu_4).jpg'),
(60, 60, 'img/SM_khaki_rach_Zara_(sm_khakirach_zr_1).jpg', 'img/SM_khaki_rach_Zara_(sm_khakirach_zr_cm).jpg', 'img/SM_khaki_rach_Zara_(sm_khakirach_zr_2).jpg'),
(61, 61, 'img/SM_dui_dai_tay_co_tau_ke_soc_Zara_(sm_dui_co_tau_ke_soc_zr_6).jpg', 'img/SM_dui_dai_tay_co_tau_ke_soc_Zara_(sm_dui_co_tau_ke_soc_zr_7).jpg', 'img/SM_dui_dai_tay_co_tau_ke_soc_Zara_(sm_dui_co_tau_ke_soc_zr_ms).jpg'),
(62, 62, 'img/SM_dui_coc_tay_ke_soc_HM_(sm_dui_coc_tay_ke_soc_hm_1).jpg', 'img/SM_dui_coc_tay_ke_soc_HM_(sm_dui_coc_tay_ke_soc_hm_2).jpg', 'img/SM_dui_coc_tay_ke_soc_HM_(sm_dui_coc_tay_ke_soc_hm_3).jpg'),
(63, 63, 'img/SM_dai_tay_ke_soc_Ceffylo_2_(sm_soc_ceff2_2).jpg', 'img/SM_dai_tay_ke_soc_Ceffylo_2_(sm_soc_ceff2_3).jpg', 'img/SM_dai_tay_ke_soc_Ceffylo_2_(sm_soc_ceff2_4).jpg'),
(64, 64, 'img/quan_dui_basic_zara_bl_01.jpg', 'img/Quan_dui_basic_ZARA_(quan_dui_basic_zr_1).jpg', 'img/Quan_dui_basic_ZARA_(quan_dui_basic_zr_2).jpg'),
(65, 65, 'img/quan_dui_basic_mango_.jpg', 'img/Quan_dui_basic_MANGO_(quan_dui_basicc_mg_1).jpg', 'img/Quan_dui_basic_MANGO_(quan_dui_basicc_mg_2).jpg'),
(66, 66, 'img/Shorts_dui_Aliflux_(short_dui_af_1).jpg', 'img/Shorts_dui_Aliflux_(short_dui_af_2).jpg', 'img/Shorts_dui_Aliflux_(short_dui_af_3).jpg'),
(67, 67, 'img/Shorts_hoa_tiet_Zara_2_(short_ht_zr_2_01).jpg', 'img/Shorts_hoa_tiet_Zara_2_(short_ht_zr_2_02).jpg', 'img/Shorts_hoa_tiet_Zara_2_(short_ht_zr_2_no1).jpg'),
(68, 68, 'img/Shorts_nhung_Zara_(shorts_nhung_zra_1).jpg', 'img/Shorts_nhung_Zara_(shorts_nhung_zra_2).jpg', 'img/Shorts_nhung_Zara_(shorts_nhung_zra_3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id_ctdh` int(11) NOT NULL,
  `id_sl` int(11) DEFAULT NULL,
  `id_donhang` int(11) DEFAULT NULL,
  `soluong` varchar(25) DEFAULT NULL,
  `tonggia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ctdonhang`
--

INSERT INTO `ctdonhang` (`id_ctdh`, `id_sl`, `id_donhang`, `soluong`, `tonggia`) VALUES
(2, 2, 14, '2', 760000),
(3, 8, 14, '2', 700000),
(4, 2, 15, '2', 760000),
(5, 8, 15, '2', 700000),
(6, 14, 15, '1', 280000),
(7, 158, 16, '1', 420000),
(8, 161, 16, '2', 840000),
(9, 358, 17, '2', 520000),
(10, 106, 18, '1', 380000),
(11, 157, 19, '1', 420000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `danhmuc` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `danhmuc`) VALUES
(1, 'Polo and T-shirts'),
(2, 'Quần âu'),
(3, 'Quần kaki'),
(4, 'Quần jeans'),
(5, 'ÁO SƠ MI');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `tongtien` int(20) DEFAULT NULL,
  `id_tinhtrang` int(10) DEFAULT NULL,
  `ngaydat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_kh`, `tongtien`, `id_tinhtrang`, `ngaydat`) VALUES
(5, 4, 231423, 2, '2021-06-11 20:54:00'),
(6, 3, 78999, 1, '2021-06-15 20:55:00'),
(7, 3, 453453, 4, '2021-06-09 10:19:00'),
(14, 12, 1460000, 4, '2021-06-09 05:06:19'),
(15, 13, 1740000, 4, '2021-06-09 05:12:09'),
(16, 14, 1260000, 4, '2021-06-09 11:20:44'),
(17, 15, 520000, 4, '2021-06-24 11:23:26'),
(18, 16, 380000, 4, '2021-06-24 11:26:08'),
(19, 17, 420000, 4, '2021-06-24 11:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `huongdan`
--

CREATE TABLE `huongdan` (
  `id_huongdan` int(11) NOT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `anh1` varchar(100) DEFAULT NULL,
  `anh2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huongdan`
--

INSERT INTO `huongdan` (`id_huongdan`, `id_danhmuc`, `anh1`, `anh2`) VALUES
(1, 1, 'img/bang_chon_size_ao_theo_chieu_cao_can_nang.png', 'img/ao_polo.png'),
(2, 2, 'img/Quan_au_C467_POLIDO_(q_au).png', NULL),
(3, 3, 'img/Jogger_kaki_tui_khoa_POLIDO_(bang_chon_size_quan_theo_chieu_cao_can_nang_1).jpg', NULL),
(4, 4, 'img/bang_chon_size_quan.jpg', NULL),
(5, 5, 'img/bang_chon_size_ao_theo_chieu_cao_can_nang.png', 'img/ao_so_mi.png');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `tenkh` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `diachi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `sdt`, `email`, `diachi`) VALUES
(2, 'rtert', '343434', 'ytret@thh.com', 'ẻtrt'),
(3, 'hkjhkj', '657765756', 'ytret@thh.com', 'gkjhkjhk'),
(4, 'fgghfg', '325324213', 'ytret@thh.com', 'gfdgdfg'),
(12, 'rtert', '1234567890', 'ytret@thh.com', 'dfsgfgfdfd'),
(13, 'sadsad', '1111111111', 'asd@yahoo.com', 'fgdfgfdgfdgf'),
(14, 'dasdas', '1234567890', 'asd@yahoo.com', 'safdshgsdfsdfds'),
(15, 'sddsad', '1234567890', 'ytret@thh.com', 'saedweqwewq'),
(16, 'dfd', '1234562323', 'asd@yahoo.com', 'dfdsfsdsdf'),
(17, 'wrewrewr', '1234567890', 'ytret@thh.com', 'wewqeqw');

-- --------------------------------------------------------

--
-- Table structure for table `kichco`
--

CREATE TABLE `kichco` (
  `id_kichco` int(11) NOT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `kichco` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kichco`
--

INSERT INTO `kichco` (`id_kichco`, `id_danhmuc`, `kichco`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 1, 'L'),
(4, 5, 'S'),
(5, 5, 'M'),
(6, 5, 'L'),
(7, 2, '29'),
(8, 2, '31'),
(9, 2, '30'),
(10, 3, '28'),
(11, 3, '29'),
(12, 3, '30'),
(13, 4, '29'),
(14, 4, '30'),
(15, 4, '31');

-- --------------------------------------------------------

--
-- Table structure for table `mausac`
--

CREATE TABLE `mausac` (
  `id_mausac` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `mausac` varchar(25) DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mausac`
--

INSERT INTO `mausac` (`id_mausac`, `id_sp`, `mausac`, `anh`) VALUES
(1, 1, 'Xám nhạt', 'img/polo_tay_theu_chu_ceff_lg_800x800.jpg'),
(2, 1, 'Xanh navy', 'img/polo_tay_theu_chu_ceff_nv_800x800.jpg'),
(3, 2, 'Xám', 'img/polo_tui_ceff_gr_800x800.jpg'),
(4, 2, 'Trắng', 'img/polo_tui_ceff_wh_800x800.jpg'),
(5, 3, 'Đen', 'img/phong_tron_cotton_ceffylo_bl_800x800.jpg'),
(6, 3, 'Trắng', 'img/phong_tron_cotton_ceffylo_wh_800x800.jpg'),
(7, 4, 'Trắng', 'img/polo_tay_phoi_bo_in_ke_wh_800x800.jpg'),
(8, 4, 'Xanh navy ', 'img/polo_tay_phoi_bo_in_ke_nv_800x800.jpg'),
(9, 5, 'Trắng', 'img/polo_phoi_bo_ceff_wh_800x800.jpg'),
(10, 5, 'Xám ', 'img/polo_phoi_bo_ceff_gr_800x800.jpg'),
(11, 6, 'Xanh navy', 'img/polo_tron_phoi_bo_ceff_nv_800x800.jpg'),
(12, 6, 'Trắng', 'img/polo_tron_phoi_bo_ceff_wh_800x800.jpg'),
(13, 7, 'Đen', 'img/polo_in_ke_soc_cefff_bl_1000x1000.jpg'),
(14, 7, 'Trắng', 'img/polo_in_ke_soc_cefff_wh_1000x1000.jpg'),
(15, 8, 'đen', 'img/phong_in_chu_ceff_2_bl_800x800.jpg'),
(16, 8, 'Trắng', 'img/phong_in_chu_ceff_2_wh_800x800.jpg'),
(17, 9, 'Đen', 'img/phong_in_chu_ceff_1_bl_800x800.jpg'),
(18, 9, 'Trắng', 'img/phong_in_chu_ceff_1_wh_800x800.jpg'),
(19, 10, 'Đen', 'img/quan_au_ke_soc_ceff_bl_800x800.jpg'),
(20, 10, 'Xanh navy', 'img/quan_au_ke_soc_ceff_nv_800x800.jpg'),
(21, 11, 'Xám đậm', 'img/quan_au_ke_caro_ceff_gr_800x800.jpg'),
(22, 12, 'Đen', 'img/quanantroin_ceff_bl_800x800.jpg'),
(23, 12, 'Xám đậm', 'img/quanantroin_ceff_grc_800x800.jpg'),
(24, 13, 'Xanh navy', 'img/ceffylo_hidden_button_pant_nv_800x800.jpg'),
(25, 14, 'Đen', 'img/quan_au_baggy_soc_ceffylo_bl_800x800.jpg'),
(26, 14, 'Xám đậm', 'img/baggy_soc_ceff_grc_800x800.jpg'),
(27, 15, 'Xám', 'img/quan_au_phoi_soc_ceffylo_gr_800x800.jpg'),
(28, 15, 'Be', 'img/quan_au_phoi_soc_ceffylo_be_800x800.jpg'),
(29, 16, 'Xám', 'img/quanauc467polido_gr_800x800.jpg'),
(30, 17, 'Xanh dương', 'img/quanau79zr_nav_800x800.jpg'),
(31, 17, 'Xanh rêu', 'img/quanau79zr_ms_800x800.jpg'),
(32, 18, 'Xanh indigo', 'img/quan_au_79_polido_indi_03.jpg'),
(33, 18, 'Xám', 'img/quan_au_79_polido_gr_01_1000x1000.jpg'),
(34, 19, 'Xanh navy', 'img/sm_ke_ceffylo2_nv_800x800.jpg'),
(35, 19, 'Nâu', 'img/sm_ke_ceffylo2_br_800x800.jpg'),
(36, 20, 'Cam', 'img/sm_ke_soc_phoi_ceffylo_or_800x800.jpg'),
(37, 20, 'Xanh dương', 'img/sm_ke_soc_phoi_ceffylo_bu_800x800.jpg'),
(38, 21, 'Nâu', 'img/sm_ke_ceffylo_1_br_800x800.jpg'),
(39, 21, 'Xanh navy ', 'img/sm_ke_ceffylo_1_nv_800x800.jpg'),
(40, 22, 'Đen', 'img/sm_dt_ke_soc_nho_ceff_bl_800x800.jpg'),
(41, 22, 'Xanh navy', 'img/sm_dt_ke_soc_nho_ceff_nv_800x800.jpg'),
(42, 23, 'Trắng', 'img/sm_van_chim_ke_cheo_ceff_wh_800x800.jpg'),
(43, 23, 'Đen', 'img/sm_van_chim_ke_cheo_ceff_bl_800x800.jpg'),
(44, 24, 'NO.3', 'img/sm_ht_ceff1_no2.jpg'),
(45, 25, 'Trắng', 'img/sm_bamboo_ke_soc_ceff_wh_800x800.jpg'),
(46, 25, 'Xám', 'img/sm_bamboo_ke_soc_ceff_gr_800x800.jpg'),
(47, 26, 'Trắng', 'img/sm_troncefff_wh.jpg'),
(48, 26, 'Xám', 'img/sm_troncefff_gr.jpg'),
(49, 27, 'Xanh navy', 'img/smdt_tron_ceff_nv_800x800.jpg'),
(50, 27, 'Trắng', 'img/smdt_tron_ceff_wh_800x800.jpg'),
(51, 28, 'Đen', 'img/quan_kk_tui_cheo_ceff_bl_2048x2048.jpg'),
(52, 28, 'Camel', 'img/quan_kk_tui_cheo_ceff_cm_800x800.jpg'),
(53, 29, 'Đen', 'img/quan_khaki_tuingang_ceff_bl_800x800.jpg'),
(54, 29, 'Camel', 'img/quankktuingang_cm.jpg'),
(55, 29, 'Xám đậm', 'img/quan_khaki_tuingang_ceff_grc_800x800.jpg'),
(56, 30, 'Đen', 'img/chinos_jeans_ceff_bl_800x800.jpg'),
(57, 30, 'Chocolate', 'img/chinos_jeans_ceff_ch_800x800.jpg'),
(58, 31, 'Camel', 'img/chinos_bs_ceffylo_cm_800x800.jpg'),
(59, 31, 'Xám đậm', 'img/chinos_bs_ceffylo_grc_800x800.jpg'),
(60, 32, 'Nâu', 'img/joggerkkceff_br_1.jpg'),
(61, 32, 'Xám nhạt', 'img/jogger_khaki_ceffylo_lg_800x800.jpg'),
(62, 33, 'Xanh navy', 'img/jogger_khaki_tui_khoa_pb_nv_800x800.jpg'),
(63, 33, 'Xám', 'img/jogger_khaki_tui_khoa_pb_gr_800x800.jpg\r\n'),
(64, 34, 'Be', 'img/chinos_basic_zraa_be_800x800.jpg'),
(65, 34, 'Kem', 'img/chinos_basic_zraa_ke_800x800.jpg'),
(66, 35, 'Xám', 'img/chinos_jeans_tmman_gr_800x800.jpg'),
(67, 35, 'Trắng', 'img/chinos_jeans_tmman_wh_800x800.jpg'),
(68, 42, 'Camel', 'img/quan_dui_dai_basic_hm_cm_800x800.jpg'),
(69, 42, 'Xanh rêu', 'img/quan_dui_dai_basic_hm_ms_800x800.jpg'),
(70, 36, 'Xanh nhạt', 'img/jeans_rach_superbrother_lb.jpg'),
(71, 36, 'Xanh đậm', 'img/jeans_rach_superbrother_dgn.jpg'),
(72, 37, 'Đen', 'img/quan_jean_rach_ceffylo_bl_800x800.jpg'),
(73, 37, 'Xanh đậm', 'img/quan_jean_rach_ceffylo_dgn_800x800.jpg'),
(74, 38, 'Đen', 'img/jean_tron_ceff_1_bl_1000x1000.jpg'),
(75, 38, 'Xám đậm', 'img/jean_tron_ceff_1_grc_1000x1000.jpg'),
(76, 39, 'Xám nhạt', 'img/jean_rach_ceff_lg_800x800.jpg'),
(77, 39, 'Xanh nhạt', 'img/jean_rach_ceff_dgn_800x800.jpg'),
(78, 40, 'Đen', 'img/jeans_tron_bs_ceffylo_bl_1000x1000.jpg'),
(79, 40, 'Xanh đậm', 'img/jeans_tron_bs_ceffylo_dgn_800x800.jpg'),
(80, 41, 'Đen', 'img/quan_jean_tron_ceffylo_bl.jpg'),
(81, 41, 'Xám', 'img/quan_jean_tron_ceffylo_gr.jpg'),
(82, 43, 'Đen', 'img/shorts_khaki_tron_ceffylo_bl_800x800.jpg'),
(83, 43, 'Trắng', 'img/shorts_khaki_tron_ceffylo_wh_800x800.jpg'),
(84, 44, 'Trắng', 'img/short_khakihm_wh_800x800.jpg'),
(85, 44, 'Xám nhạt', 'img/short_khakihm_lg_800x800.jpg'),
(86, 45, 'Trắng', 'img/short_duicapchun_hm_wh_800x800.jpg'),
(87, 45, 'Camel', 'img/short_duicapchun_hm_cm_800x800.jpg'),
(88, 46, 'Ghi', 'img/polo_ht_intran_chambi_ceff_cbb_1000x1000.jpg'),
(89, 46, 'Trắng', 'img/polo_ht_intran_chambi_ceff_wh_1000x1000.jpg'),
(90, 47, 'Đen', 'img/phong_tron_basic_ceff_bl_1000x1000.jpg'),
(91, 47, 'Trắng', 'img/phong_tron_basic_ceff_wh_1000x1000.jpg'),
(92, 48, 'Xanh navy', 'img/polo_in_tran_cf_nv_800x800.jpg'),
(93, 48, 'Trắng', 'img/polo_in_tran_cf_wh_800x800.jpg'),
(94, 49, 'Đen', 'img/aophongnamtronbasic_ceffylo_bl_800x800.jpg'),
(95, 49, 'Xanh navy', 'img/aophongnamtronbasic_ceffylo_nv_800x800.jpg'),
(96, 50, 'Đen', 'img/polo_tron_bs_ceffylo_bl_1000x1000.jpg'),
(97, 50, 'Trắng', 'img/polo_tron_bs_ceffylo_wh_1000x1000.jpg'),
(98, 51, 'Đen', 'img/ao_phong_ke_ngang_ceff_bl.jpg'),
(99, 51, 'Hồng', 'img/ao_phong_ke_ngang_ceff_pk.jpg'),
(100, 52, 'Xám nhạt', 'img/quan_au_soc_polido_lg_800x800.jpg'),
(101, 52, 'Đen', 'img/quan_au_soc_polido_gr_800x800.jpg'),
(102, 53, 'Xanh navy', 'img/quan_au_tron_k2_mango_nv_800x800.jpg'),
(103, 54, 'Đen', 'img/quan-au-soc-ceffylo-bl-01.jpg'),
(104, 54, 'Xám', 'img/quan-au-soc-ceffylo-gr-01.jpg'),
(105, 55, 'Đen', 'img/quan_aucarro_ceff_bl_800x800.jpg'),
(106, 55, 'Xám nhạt', 'img/quan_aucarro_ceff_lg_800x800.jpg'),
(107, 56, 'Nâu', 'img/quan-au-xan-gau-c467-ceffylo-br-01.jpg'),
(108, 57, 'Be', 'img/quan_au_79_zara_be_13_1000x1000.jpg'),
(109, 58, 'Đen', 'img/smdenim_ceff_bl_800x800.jpg'),
(110, 58, 'Xám', 'img/smdenim_ceff_gr_800x800.jpg'),
(111, 59, 'NO.1', 'img/sm_van_chim_laurent_no1_800x800.jpg'),
(112, 60, 'Xanh rêu', 'img/sm_khakirach_zr_ms_800x800.jpg'),
(113, 61, 'Xanh rêu', 'img/sm_dui_co_tau_ke_soc_zr_ms_800x800.jpg'),
(114, 62, 'Camel', 'img/sm_dui_coc_tay_ke_soc_hm_cm_800x800.jpg'),
(115, 62, 'Nâu', 'img/sm_dui_coc_tay_ke_soc_hm_br_800x800.jpg'),
(116, 63, 'Hồng', 'img/sm_dt_ke_soc_ceff2_pk_800x800.jpg'),
(117, 64, 'Xanh navy', 'img/quan_dui_basic_zara_nv_01.jpg'),
(118, 64, 'Xanh rêu', 'img/quan_dui_basic_zara_ms_01.jpg'),
(119, 65, 'Xanh navy', 'img/quan-dui-basic-mg-nv-03.jpg'),
(120, 66, 'Xanh da trời nhạt', 'img/short_dui_af_3_800x800.jpg'),
(121, 67, 'NO.1', 'img/short_ht_zr_2_no1_800x800.jpg'),
(122, 67, 'NO.2', 'img/short_ht_zr_2_no2_800x800.jpg'),
(123, 68, 'Xanh navy', 'img/shorts_nhung_zra_nv_800x800.jpg'),
(124, 68, 'Xanh rêu', 'img/shorts_nhung_zara_ms_800x800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE `phanloai` (
  `id_type` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `detail_type` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(100) DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `daban` int(20) DEFAULT NULL,
  `anh0` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `anh`, `gia`, `id_danhmuc`, `daban`, `anh0`) VALUES
(1, 'Polo tay thêu chữ Ceffylo', 'img/polo-tay-theu-chu-ceff-1.jpg', 380000, 1, 352, 'img/polo_tay_theu_chu_ceff_lg_800x800.jpg'),
(2, 'Polo có túi Ceffylo', 'img/polo_tui_ceff_gr_800x800.jpg', 350000, 1, 102, 'img/polo_tui_ceff_gr_800x800.jpg'),
(3, 'Phông trơn cotton Ceffylo', 'img/phong_tron_cotton_ceffylo_cm_800x800.jpg', 280000, 1, 165, 'img/phong_tron_cotton_ceffylo_bl_800x800.jpg'),
(4, 'Polo tay phối bo in kẻ Ceffylo', 'img/polo-tay-phoi-bo-in-ke-1.jpg', 350000, 1, 168, 'img/polo_tay_phoi_bo_in_ke_wh_800x800.jpg'),
(5, 'Polo phối bo Ceffylo', 'img/polo-phoi-bo-ceff-1.jpg', 350000, 1, 268, 'img/polo_phoi_bo_ceff_wh_800x800.jpg'),
(6, 'Polo trơn phối bo Ceffylo', 'img/polo-tron-phoi-bo-ceff-1.jpg', 350000, 1, 147, 'img/polo_tron_phoi_bo_ceff_nv_800x800.jpg'),
(7, 'Polo in kẻ sọc Ceffylo', 'img/polo-in-ke-soc-cefff-1.jpg', 350000, 1, 94, 'img/polo_in_ke_soc_cefff_bl_1000x1000.jpg'),
(8, 'Áo phông ngực in chữ Ceffylo 2', 'img/phong-in-chu-ceff-2-1.jpg', 320000, 1, 149, 'img/phong_in_chu_ceff_2_bl_800x800.jpg'),
(9, 'Áo phông ngực in chữ Ceffylo 1', 'img/phong-in-chu-ceff-1-1.jpg', 320000, 1, 197, 'img/phong_in_chu_ceff_1_bl_800x800.jpg'),
(10, 'Quần âu kẻ sọc Ceffylo', 'img/quan-au-ke-soc-ceff-1.jpg', 480000, 2, 248, 'img/quan_au_ke_soc_ceff_bl_800x800.jpg'),
(11, 'Quần âu kẻ caro Ceffylo', 'img/quan_au_ke_caro_ceff_lg_800x800.jpg', 550000, 2, 134, 'img/quan_au_ke_caro_ceff_gr_800x800.jpg'),
(12, 'Quần âu trơn Ceffylo', 'img/quanantroin-ceff-1.jpg', 480000, 2, 157, 'img/quanantroin_ceff_bl_800x800.jpg'),
(13, 'Ceffylo hidden button pant', 'img/ceffylo-hidden-button-pant-01.jpg', 520000, 2, 277, 'img/ceffylo_hidden_button_pant_nv_800x800.jpg'),
(14, 'Quần âu baggy sọc Ceffylo', 'img/quan-au-baggy-soc-ceffylo-0-800x800.jpg', 480000, 2, 245, 'img/quan_au_baggy_soc_ceffylo_bl_800x800.jpg'),
(15, 'Quần âu phối sọc Ceffylo', 'img/quan-au-phoi-soc-ceffylo-01-800x800.jpg', 480000, 2, 156, 'img/quan_au_phoi_soc_ceffylo_gr_800x800.jpg'),
(16, 'Quần âu C467 POLIDO', 'img/quan-au-c467-polido-quan-au-c467-polidoo-1.jpg', 480000, 2, 133, 'img/quanauc467polido_gr_800x800.jpg'),
(17, 'Quần âu 79 ZARA', 'img/quanau79zr-0.jpg', 480000, 2, 287, 'img/quanau79zr_nav_800x800.jpg'),
(18, 'Quần âu 79 POLIDO', 'img/quan-au-79-polido.jpg', 480000, 2, 147, 'img/quan_au_79_polido_indi_03.jpg'),
(19, 'SM kẻ Ceffylo 2', 'img/sm-ke-ceffylo2-1.jpg', 380000, 5, 287, 'img/sm_ke_ceffylo2_nv_800x800.jpg'),
(20, 'SM dài tay kẻ phối Ceffylo', 'img/263ce645a44a56140f5b2.jpg', 380000, 5, 155, 'img/sm_ke_soc_phoi_ceffylo_or_800x800.jpg'),
(21, 'SM kẻ Ceffylo 1', 'img/sm-ke-ceffylo-1-1.jpg', 350000, 5, 260, 'img/sm_ke_ceffylo_1_br_800x800.jpg'),
(22, 'SM dài tay kẻ sọc nhỏ Ceffylo', 'img/sm-dt-ke-soc-nho-ceff.jpg', 380000, 5, 102, 'img/sm_dt_ke_soc_nho_ceff_bl_800x800.jpg'),
(23, 'SM vân chìm kẻ chéo Ceffylo', 'img/sm-van-chim-ke-cheo-ceff.jpg', 380000, 5, 134, 'img/sm_van_chim_ke_cheo_ceff_wh_800x800.jpg'),
(24, 'SM họa tiết Ceffylo 1', 'img/sm-ht-ceff1-0.jpg', 350000, 5, 175, 'img/sm_ht_ceff1_no2.jpg'),
(25, 'SM bamboo kẻ sọc Ceffylo', 'img/sm-bamboo-ke-soc-ceff-1.jpg', 420000, 5, 257, 'img/sm_bamboo_ke_soc_ceff_wh_800x800.jpg'),
(26, 'SM trơn bamboo Ceffylo', 'img/sm-troncefff-1.jpg', 420000, 5, 267, 'img/sm_troncefff_wh.jpg'),
(27, 'SM dài tay trơn basic Ceffylo', 'img/smtronbsce1.jpg', 350000, 5, 144, 'img/smdt_tron_ceff_nv_800x800.jpg'),
(28, 'Quần kaki túi chéo Ceffylo', 'img/quan-kk-tui-cheo-1.jpg', 400000, 3, 157, 'img/quan_kk_tui_cheo_ceff_bl_2048x2048.jpg'),
(29, 'Quần kaki túi ngang Ceffylo', 'img/quan-kk-tui-ngang-1.jpg', 420000, 3, 290, 'img/quan_khaki_tuingang_ceff_bl_800x800.jpg'),
(30, 'Chinos jeans Ceffylo', 'img/chinos-jeans-ceff-1.jpg', 480000, 3, 247, 'img/chinos_jeans_ceff_bl_800x800.jpg'),
(31, 'Chinos basic Ceffylo', 'img/chinos-bs-ceffylo-01.jpg', 450000, 3, 198, 'img/chinos_bs_ceffylo_cm_800x800.jpg'),
(32, 'Jogger khaki Ceffylo', 'img/jogger-khaki-ceffylo-01.jpg', 450000, 3, 122, 'img/joggerkkceff_br_1.jpg'),
(33, 'Jogger kaki túi khóa PullBear', 'img/jogger-khaki-tui-khoa-pb-1.jpg', 480000, 3, 157, 'img/jogger_khaki_tui_khoa_pb_nv_800x800.jpg'),
(34, 'Chinos basic ZARA', 'img/chinos-basic-zraa-01.jpg', 450000, 3, 264, 'img/chinos_basic_zraa_be_800x800.jpg'),
(35, 'Chinos jeans Topman', 'img/chinos-jeans-tmman-01.jpg', 480000, 3, 275, 'img/chinos_jeans_tmman_gr_800x800.jpg'),
(36, 'Quần jeans rách Super Brother', 'img/jeans_rach_superbrother_dgn.jpg', 450000, 4, 145, 'img/jeans_rach_superbrother_lb.jpg'),
(37, 'Quần jeans rách gối Ceffylo', 'img/quan-jeans-rachgoi-ceff.jpg', 580000, 4, 287, 'img/quan_jean_rach_ceffylo_bl_800x800.jpg'),
(38, 'Quần Jeans trơn Ceffylo 1', 'img/jean-tron-ceff-1-1.jpg', 580000, 4, 105, 'img/jean_tron_ceff_1_bl_1000x1000.jpg'),
(39, 'Quần jeans rách Ceffylo\r\n', 'img/jean-rach-ceff-1.jpg', 580000, 4, 241, 'img/jean_rach_ceff_lg_800x800.jpg'),
(40, 'Quần jeans trơn basic Ceffylo', 'img/jeans-tron-bs-ceffylo-05.jpg', 580000, 4, 145, 'img/jeans_tron_bs_ceffylo_bl_1000x1000.jpg'),
(41, 'Quần jeans trơn Ceffylo', 'img/quan-jean-tron-ceffylo-1.jpg', 580000, 4, 172, 'img/quan_jean_tron_ceffylo_bl.jpg'),
(42, 'Quần dài đũi basic HM', 'img/quan-dui-dai-basic-hm-01.jpg', 390000, 3, 267, 'img/quan_dui_dai_basic_hm_cm_800x800.jpg'),
(43, 'Shorts khaki trơn Ceffylo', 'img/shorts-khaki-tron-ceffylo-1.jpg', 360000, 4, 167, 'img/shorts_khaki_tron_ceffylo_bl_800x800.jpg'),
(44, 'Shorts khaki trơn HM', 'img/short-khakihm-1.jpg', 360000, 4, 127, 'img/short_khakihm_wh_800x800.jpg'),
(45, 'Shorts đũi cạp chun HM', 'img/short-duicapchun-hm-1.jpg', 350000, 4, 215, 'img/short_duicapchun_hm_wh_800x800.jpg'),
(46, 'Polo HT in tràn chấm bi Ceffylo', 'img/polo-ht-in-tran-cham-bi-ceff.jpg', 350000, 1, 132, 'img/polo_ht_intran_chambi_ceff_cbb_1000x1000.jpg'),
(47, 'Phông cộc tay trơn Ceffylo', 'img/phong-coc-tay-basic-ceff.jpg', 260000, 1, 211, 'img/phong_tron_basic_ceff_bl_1000x1000.jpg'),
(48, 'Polo HT in tràn CF', 'img/polo-in-tran-cf-1.jpg', 350000, 1, 164, 'img/polo_in_tran_cf_nv_800x800.jpg'),
(49, 'Áo phông trơn basic Ceffylo', 'img/aophongnamtronbasic-ceffylo-01.jpg', 280000, 1, 168, 'img/aophongnamtronbasic_ceffylo_bl_800x800.jpg'),
(50, 'Polo trơn basic Ceffylo', 'img/polo-tron-bs-ceffylo-1.jpg', 320000, 1, 268, 'img/polo_tron_bs_ceffylo_bl_1000x1000.jpg'),
(51, 'Áo phông cộc tay kẻ ngang Ceffylo', 'img/ao-phong-ke-ngang-ceff-1.jpg', 280000, 1, 147, 'img/ao_phong_ke_ngang_ceff_bl.jpg'),
(52, 'Quần âu sọc Polido', 'img/quan-au-soc-polido-1-800x800.jpg', 480000, 2, 248, 'img/quan_au_soc_polido_lg_800x800.jpg'),
(53, 'QUẦN ÂU trơn K2 MANGO', 'img/quan-au-k2-mgo.jpg', 450000, 2, 134, 'img/quan_au_tron_k2_mango_nv_800x800.jpg'),
(54, 'Quần âu sọc CEFFYLO', 'img/quan-au-soc-ceffylo.jpg', 520000, 2, 157, 'img/quan-au-soc-ceffylo-bl-01.jpg'),
(55, 'Quần âu caro CEFFYLO', 'img/quan-aucarro-ceff-1.jpg', 520000, 2, 277, 'img/quan_aucarro_ceff_bl_800x800.jpg'),
(56, 'Quần âu xắn gấu C.467 CEFFYLO', 'img/quan-au-xan-gau-c-467-ceffylo-quan-au-xan-gau-c467-ceff-2.jpg', 480000, 2, 245, 'img/quan-au-xan-gau-c467-ceffylo-br-01.jpg'),
(57, 'Quần âu dài 79 Zara', 'img/quan-au-dai-79zr.jpg', 480000, 2, 156, 'img/quan_au_79_zara_be_13_1000x1000.jpg'),
(58, 'SM jeans trơn Ceffylo', 'img/smdenim-ceff-1.jpg', 380000, 5, 287, 'img/smdenim_ceff_bl_800x800.jpg'),
(59, 'SM trắng vân chìm Laurent Taylor', 'img/sm-van-chim-laurent-01.jpg', 450000, 5, 154, 'img/sm_van_chim_laurent_no1_800x800.jpg'),
(60, 'SM khaki rách Zara', 'img/sm-khakirach-zr-1.jpg', 380000, 5, 260, 'img/sm_khakirach_zr_ms_800x800.jpg'),
(61, 'SM đũi dài tay cổ tàu kẻ sọc Zara', 'img/sm-dui-co-tau-ke-soc-zr.jpg', 380000, 5, 102, 'img/sm_dui_co_tau_ke_soc_zr_ms_800x800.jpg'),
(62, 'SM đũi cộc tay kẻ sọc HM', 'img/sm-dui-coc-tay-ke-soc-hm.jpg', 350000, 5, 134, 'img/sm_dui_coc_tay_ke_soc_hm_cm_800x800.jpg'),
(63, 'SM dài tay kẻ sọc Ceffylo 2', 'img/sm-dt-ke-soc-ceff2-01.jpg', 350000, 5, 175, 'img/sm_dt_ke_soc_ceff2_pk_800x800.jpg'),
(64, 'Quần đũi basic ZARA', 'img/quan-dui-basic-zr-1.jpg', 340000, 3, 157, 'img/quan_dui_basic_zara_nv_01.jpg'),
(65, 'Quần đũi basic MANGO', 'img/quan-dui-basic-mango-quan-dui-basicc-mg-1.jpg', 420000, 3, 287, 'img/quan-dui-basic-mg-nv-03.jpg'),
(66, 'Shorts đũi Aliflux', 'img/short-dui-af-1.jpg', 260000, 4, 289, 'img/short_dui_af_3_800x800.jpg'),
(67, 'Shorts họa tiết Zara 2', 'img/shorts-ht-zr2.jpg', 260000, 4, 105, 'img/short_ht_zr_2_no1_800x800.jpg'),
(68, 'Shorts nhung Zara', 'img/shorts-nhung-zara-01.jpg', 350000, 4, 241, 'img/shorts_nhung_zra_nv_800x800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soluong`
--

CREATE TABLE `soluong` (
  `id_sp` int(11) DEFAULT NULL,
  `id_kichco` int(11) DEFAULT NULL,
  `id_mausac` int(11) DEFAULT NULL,
  `soluong` varchar(25) DEFAULT NULL,
  `id_sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soluong`
--

INSERT INTO `soluong` (`id_sp`, `id_kichco`, `id_mausac`, `soluong`, `id_sl`) VALUES
(1, 1, 1, '50', 1),
(1, 1, 2, '48', 2),
(1, 2, 1, '55', 3),
(1, 2, 2, '70', 4),
(1, 3, 1, '60', 5),
(1, 3, 2, '55', 6),
(2, 1, 3, '30', 7),
(2, 1, 4, '28', 8),
(2, 2, 3, '75', 9),
(2, 2, 4, '45', 10),
(2, 3, 3, '75', 11),
(2, 3, 4, '45', 12),
(3, 1, 5, '75', 13),
(3, 1, 6, '74', 14),
(3, 2, 5, '80', 15),
(3, 2, 6, '80', 16),
(3, 3, 5, '68', 17),
(3, 3, 6, '65', 18),
(4, 1, 7, '50', 19),
(4, 1, 8, '80', 20),
(4, 2, 7, '90', 21),
(4, 2, 8, '57', 22),
(4, 3, 7, '49', 23),
(4, 3, 8, '58', 24),
(5, 1, 9, '46', 25),
(5, 1, 10, '70', 26),
(5, 2, 9, '80', 27),
(5, 2, 10, '68', 28),
(5, 3, 9, '58', 29),
(5, 3, 10, '52', 30),
(6, 1, 11, '45', 31),
(6, 1, 12, '26', 32),
(6, 2, 11, '79', 33),
(6, 2, 12, '59', 34),
(6, 3, 11, '68', 35),
(6, 3, 12, '49', 36),
(7, 1, 13, '89', 37),
(7, 1, 14, '86', 38),
(7, 2, 13, '36', 39),
(7, 2, 14, '79', 40),
(7, 3, 13, '68', 41),
(7, 3, 14, '84', 42),
(8, 1, 15, '84', 43),
(8, 1, 16, '51', 44),
(8, 2, 15, '94', 45),
(8, 2, 16, '123', 46),
(8, 3, 15, '68', 47),
(8, 3, 16, '82', 48),
(9, 1, 17, '95', 49),
(9, 1, 18, '29', 50),
(9, 2, 17, '57', 51),
(9, 2, 18, '78', 52),
(9, 3, 17, '90', 53),
(9, 3, 18, '61', 54),
(10, 7, 19, '120', 55),
(10, 7, 20, '67', 56),
(10, 8, 19, '78', 57),
(10, 8, 20, '83', 58),
(10, 9, 19, '55', 59),
(10, 9, 20, '41', 60),
(11, 7, 21, '58', 61),
(11, 8, 21, '78', 62),
(11, 9, 21, '80', 63),
(12, 7, 22, '87', 64),
(12, 7, 23, '44', 65),
(12, 8, 22, '96', 66),
(12, 8, 23, '87', 67),
(12, 9, 22, '48', 68),
(12, 9, 23, '67', 69),
(13, 7, 24, '66', 70),
(13, 8, 24, '78', 71),
(13, 9, 24, '93', 72),
(14, 7, 25, '57', 73),
(14, 7, 26, '87', 74),
(14, 8, 25, '45', 75),
(14, 8, 26, '58', 76),
(14, 9, 25, '50', 77),
(14, 9, 26, '99', 78),
(15, 7, 27, '78', 79),
(15, 7, 28, '54', 80),
(15, 8, 27, '68', 81),
(15, 8, 28, '42', 82),
(15, 9, 27, '57', 83),
(15, 9, 28, '55', 84),
(16, 7, 29, '96', 85),
(16, 8, 29, '68', 86),
(16, 9, 29, '48', 87),
(17, 7, 30, '87', 88),
(17, 7, 31, '88', 89),
(17, 8, 30, '94', 90),
(17, 8, 31, '69', 91),
(17, 9, 30, '35', 92),
(17, 9, 31, '64', 93),
(18, 7, 32, '78', 94),
(18, 7, 33, '86', 95),
(18, 8, 32, '98', 96),
(18, 8, 33, '76', 97),
(18, 9, 32, '65', 98),
(18, 9, 33, '82', 99),
(19, 4, 34, '68', 100),
(19, 4, 35, '95', 101),
(19, 5, 34, '88', 102),
(19, 5, 35, '61', 103),
(19, 6, 34, '80', 104),
(19, 6, 35, '76', 105),
(20, 4, 36, '88', 106),
(20, 4, 37, '62', 107),
(20, 5, 36, '34', 108),
(20, 5, 37, '37', 109),
(20, 6, 36, '84', 110),
(20, 6, 37, '94', 111),
(21, 4, 38, '97', 112),
(21, 4, 39, '65', 113),
(21, 5, 38, '90', 114),
(21, 5, 39, '87', 115),
(21, 6, 38, '65', 116),
(21, 6, 39, '77', 117),
(22, 4, 40, '87', 118),
(22, 4, 41, '99', 119),
(22, 5, 40, '65', 120),
(22, 5, 41, '45', 121),
(22, 6, 40, '40', 122),
(22, 6, 41, '51', 123),
(23, 4, 42, '78', 124),
(23, 4, 43, '31', 125),
(23, 5, 42, '55', 126),
(23, 5, 43, '77', 127),
(23, 6, 42, '84', 128),
(23, 6, 43, '76', 129),
(24, 4, 44, '48', 130),
(24, 5, 44, '75', 131),
(24, 6, 44, '64', 132),
(25, 4, 45, '45', 133),
(25, 4, 46, '66', 134),
(25, 5, 45, '33', 135),
(25, 5, 46, '89', 136),
(25, 6, 45, '87', 137),
(25, 6, 46, '97', 138),
(26, 4, 47, '58', 139),
(26, 4, 48, '94', 140),
(26, 5, 47, '97', 141),
(26, 5, 48, '76', 142),
(26, 6, 47, '61', 143),
(26, 6, 48, '50', 144),
(27, 4, 49, '78', 145),
(27, 4, 50, '68', 146),
(27, 5, 49, '90', 147),
(27, 5, 50, '44', 148),
(27, 6, 49, '87', 149),
(27, 6, 50, '49', 150),
(28, 10, 51, '78', 151),
(28, 10, 52, '67', 152),
(28, 11, 51, '88', 153),
(28, 11, 52, '54', 154),
(28, 12, 51, '47', 155),
(28, 12, 52, '86', 156),
(29, 10, 53, '63', 157),
(29, 10, 54, '86', 158),
(29, 11, 53, '94', 159),
(29, 11, 54, '67', 160),
(29, 12, 53, '77', 161),
(29, 12, 54, '91', 162),
(29, 10, 55, '87', 163),
(29, 11, 55, '56', 164),
(29, 12, 55, '77', 165),
(30, 10, 56, '94', 166),
(30, 10, 57, '47', 167),
(30, 11, 56, '85', 168),
(30, 11, 57, '61', 169),
(30, 12, 56, '94', 170),
(30, 12, 57, '49', 171),
(31, 10, 58, '94', 172),
(31, 10, 59, '76', 173),
(31, 11, 58, '42', 174),
(31, 11, 59, '46', 175),
(31, 12, 58, '47', 176),
(31, 12, 59, '58', 177),
(32, 10, 60, '75', 178),
(32, 10, 61, '67', 179),
(32, 11, 60, '48', 180),
(32, 11, 61, '57', 181),
(32, 12, 60, '67', 182),
(32, 12, 61, '97', 183),
(33, 10, 62, '57', 184),
(33, 10, 63, '67', 185),
(33, 11, 62, '85', 186),
(33, 11, 63, '42', 187),
(33, 12, 62, '46', 188),
(33, 12, 63, '57', 189),
(34, 10, 64, '57', 190),
(34, 10, 65, '67', 191),
(34, 11, 64, '58', 192),
(34, 11, 65, '48', 193),
(34, 12, 64, '53', 194),
(34, 12, 64, '46', 195),
(35, 10, 66, '78', 196),
(35, 10, 67, '67', 197),
(35, 11, 66, '87', 198),
(35, 11, 67, '34', 199),
(35, 12, 66, '57', 200),
(35, 12, 67, '67', 201),
(36, 13, 70, '57', 202),
(36, 13, 71, '66', 203),
(36, 14, 70, '47', 204),
(36, 14, 71, '86', 205),
(36, 15, 70, '70', 206),
(36, 15, 71, '80', 207),
(37, 13, 72, '47', 208),
(37, 13, 73, '84', 209),
(37, 14, 72, '57', 210),
(37, 14, 73, '67', 211),
(37, 15, 72, '67', 212),
(37, 15, 73, '79', 213),
(38, 13, 74, '37', 214),
(38, 13, 75, '50', 215),
(38, 14, 74, '43', 216),
(38, 14, 75, '42', 217),
(38, 15, 74, '78', 218),
(38, 15, 75, '67', 219),
(39, 13, 76, '87', 220),
(39, 13, 77, '70', 221),
(39, 14, 76, '86', 222),
(39, 14, 77, '67', 223),
(39, 15, 76, '45', 224),
(39, 15, 77, '61', 225),
(40, 13, 78, '97', 226),
(40, 13, 79, '67', 227),
(40, 14, 78, '87', 228),
(40, 14, 79, '37', 229),
(40, 15, 78, '47', 230),
(40, 15, 79, '50', 231),
(41, 13, 80, '67', 232),
(41, 13, 81, '48', 233),
(41, 14, 80, '67', 234),
(41, 14, 81, '48', 235),
(41, 15, 80, '59', 236),
(41, 15, 81, '67', 237),
(42, 10, 68, '93', 238),
(42, 10, 69, '110', 239),
(42, 11, 68, '67', 240),
(42, 11, 69, '58', 241),
(42, 12, 68, '68', 242),
(42, 12, 69, '78', 243),
(43, 13, 82, '68', 244),
(43, 13, 83, '70', 245),
(43, 14, 82, '84', 246),
(43, 14, 83, '83', 247),
(43, 15, 82, '50', 248),
(43, 15, 83, '67', 249),
(44, 13, 84, '84', 250),
(44, 13, 85, '80', 251),
(44, 14, 84, '94', 252),
(44, 14, 85, '61', 253),
(44, 15, 84, '86', 254),
(44, 15, 85, '49', 255),
(45, 13, 86, '68', 256),
(45, 13, 87, '99', 257),
(45, 14, 86, '47', 258),
(45, 14, 87, '58', 259),
(45, 15, 86, '49', 260),
(45, 15, 87, '100', 261),
(46, 1, 88, '96', 262),
(46, 1, 89, '46', 263),
(46, 2, 88, '102', 264),
(46, 2, 89, '87', 265),
(46, 3, 88, '95', 266),
(46, 3, 89, '50', 267),
(47, 1, 90, '87', 268),
(47, 1, 91, '67', 269),
(47, 2, 90, '94', 270),
(47, 2, 91, '78', 271),
(47, 3, 90, '56', 272),
(47, 3, 91, '76', 273),
(48, 1, 92, '87', 274),
(48, 1, 93, '132', 275),
(48, 2, 92, '65', 276),
(48, 2, 93, '70', 277),
(48, 3, 92, '80', 278),
(48, 3, 93, '49', 279),
(49, 1, 94, '67', 280),
(49, 1, 95, '84', 281),
(49, 2, 94, '67', 282),
(49, 2, 95, '57', 283),
(49, 3, 94, '76', 284),
(49, 3, 95, '86', 285),
(50, 1, 96, '68', 286),
(50, 1, 97, '79', 287),
(50, 2, 96, '86', 288),
(50, 2, 97, '52', 289),
(50, 3, 96, '40', 290),
(50, 3, 97, '67', 291),
(51, 1, 98, '98', 292),
(51, 1, 99, '60', 293),
(51, 2, 98, '47', 294),
(51, 2, 99, '58', 295),
(51, 3, 98, '67', 296),
(51, 3, 99, '57', 297),
(52, 7, 100, '67', 298),
(52, 7, 101, '41', 299),
(52, 8, 100, '61', 300),
(52, 8, 101, '92', 301),
(52, 9, 100, '43', 302),
(52, 9, 101, '103', 303),
(53, 7, 102, '70', 304),
(53, 8, 102, '67', 305),
(53, 9, 102, '48', 306),
(54, 7, 103, '53', 307),
(54, 7, 104, '46', 308),
(54, 8, 103, '59', 309),
(54, 8, 104, '67', 310),
(54, 9, 103, '48', 311),
(54, 9, 104, '58', 312),
(55, 7, 105, '87', 313),
(55, 7, 106, '94', 314),
(55, 8, 105, '67', 315),
(55, 8, 106, '47', 316),
(55, 9, 105, '57', 317),
(55, 9, 106, '50', 318),
(56, 7, 107, '44', 319),
(56, 8, 107, '53', 320),
(56, 9, 107, '67', 321),
(57, 7, 108, '87', 322),
(57, 8, 108, '76', 323),
(57, 9, 108, '58', 324),
(58, 4, 109, '67', 325),
(58, 4, 110, '78', 326),
(58, 5, 109, '84', 327),
(58, 5, 110, '57', 328),
(58, 6, 109, '61', 329),
(58, 6, 110, '44', 330),
(59, 4, 111, '62', 331),
(59, 5, 111, '55', 332),
(59, 6, 111, '78', 333),
(60, 4, 112, '57', 334),
(60, 5, 112, '95', 335),
(60, 6, 112, '63', 336),
(61, 4, 113, '38', 337),
(61, 5, 113, '70', 338),
(61, 6, 113, '81', 339),
(62, 4, 114, '47', 340),
(62, 4, 115, '56', 341),
(62, 5, 114, '87', 342),
(62, 5, 115, '70', 343),
(62, 6, 114, '68', 344),
(62, 6, 115, '48', 345),
(63, 4, 116, '53', 346),
(63, 5, 116, '87', 347),
(63, 6, 116, '48', 348),
(64, 10, 117, '64', 349),
(64, 10, 118, '87', 350),
(64, 11, 117, '70', 351),
(64, 11, 118, '94', 352),
(64, 12, 117, '84', 353),
(64, 12, 118, '46', 354),
(65, 10, 119, '67', 355),
(65, 11, 119, '84', 356),
(65, 12, 119, '49', 357),
(66, 13, 120, '63', 358),
(66, 14, 120, '99', 359),
(66, 15, 120, '72', 360),
(67, 13, 121, '40', 361),
(67, 13, 122, '45', 362),
(67, 14, 121, '64', 363),
(67, 14, 122, '57', 364),
(67, 15, 121, '67', 365),
(67, 15, 122, '73', 366),
(68, 13, 123, '78', 367),
(68, 13, 124, '89', 368),
(68, 14, 123, '90', 369),
(68, 14, 124, '56', 370),
(68, 15, 123, '73', 371),
(68, 15, 124, '100', 372);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `username` varchar(18) DEFAULT NULL,
  `pass` varchar(18) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `username`, `pass`, `email`) VALUES
(1, 'admin', '123', 'ytret@thh.com'),
(2, 'werwer', '1234', 'asd@yahoo.com'),
(4, 'weqw', '1234', 'ytret@thh.com');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangdh`
--

CREATE TABLE `tinhtrangdh` (
  `id_tinhtrang` int(11) NOT NULL,
  `tinhtrang` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tinhtrangdh`
--

INSERT INTO `tinhtrangdh` (`id_tinhtrang`, `tinhtrang`) VALUES
(1, 'Đã giao'),
(2, 'Đã hủy'),
(3, 'Đang giao'),
(4, 'Đang chờ xác nhận');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `chitiet`
--
ALTER TABLE `chitiet`
  ADD PRIMARY KEY (`id_chitiet`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD PRIMARY KEY (`id_ctdh`),
  ADD KEY `id_sl` (`id_sl`),
  ADD KEY `id_donhang` (`id_donhang`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `id_kh` (`id_kh`),
  ADD KEY `id_tinhtrang` (`id_tinhtrang`);

--
-- Indexes for table `huongdan`
--
ALTER TABLE `huongdan`
  ADD PRIMARY KEY (`id_huongdan`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `kichco`
--
ALTER TABLE `kichco`
  ADD PRIMARY KEY (`id_kichco`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `mausac`
--
ALTER TABLE `mausac`
  ADD PRIMARY KEY (`id_mausac`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `soluong`
--
ALTER TABLE `soluong`
  ADD PRIMARY KEY (`id_sl`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_kichco` (`id_kichco`),
  ADD KEY `id_mausac` (`id_mausac`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  ADD PRIMARY KEY (`id_tinhtrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chitiet`
--
ALTER TABLE `chitiet`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  MODIFY `id_ctdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `huongdan`
--
ALTER TABLE `huongdan`
  MODIFY `id_huongdan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kichco`
--
ALTER TABLE `kichco`
  MODIFY `id_kichco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mausac`
--
ALTER TABLE `mausac`
  MODIFY `id_mausac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `phanloai`
--
ALTER TABLE `phanloai`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `soluong`
--
ALTER TABLE `soluong`
  MODIFY `id_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  MODIFY `id_tinhtrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet`
--
ALTER TABLE `chitiet`
  ADD CONSTRAINT `chitiet_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `ctdonhang_ibfk_1` FOREIGN KEY (`id_sl`) REFERENCES `soluong` (`id_sl`),
  ADD CONSTRAINT `ctdonhang_ibfk_2` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_tinhtrang`) REFERENCES `tinhtrangdh` (`id_tinhtrang`);

--
-- Constraints for table `huongdan`
--
ALTER TABLE `huongdan`
  ADD CONSTRAINT `huongdan_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);

--
-- Constraints for table `kichco`
--
ALTER TABLE `kichco`
  ADD CONSTRAINT `kichco_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);

--
-- Constraints for table `mausac`
--
ALTER TABLE `mausac`
  ADD CONSTRAINT `mausac_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);

--
-- Constraints for table `soluong`
--
ALTER TABLE `soluong`
  ADD CONSTRAINT `soluong_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `soluong_ibfk_2` FOREIGN KEY (`id_kichco`) REFERENCES `kichco` (`id_kichco`),
  ADD CONSTRAINT `soluong_ibfk_3` FOREIGN KEY (`id_mausac`) REFERENCES `mausac` (`id_mausac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
