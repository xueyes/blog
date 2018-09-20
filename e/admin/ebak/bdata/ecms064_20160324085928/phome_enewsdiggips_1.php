<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsdiggips`;");
E_C("CREATE TABLE `phome_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsdiggips` values('3','138',',192.168.1.1,117.23.104.92,116.208.80.147,175.160.46.46,106.44.206.80,110.53.148.230,113.134.224.107,122.233.229.230,113.137.173.234,123.138.40.22,192.168.1.232,119.124.58.170,101.226.89.119,180.153.163.187,27.22.81.39,36.250.225.202,175.44.140.225,123.138.215.126,124.115.105.66,58.101.221.113,221.204.61.178,111.63.29.170,203.208.60.54,113.69.148.36,203.208.60.133,183.47.225.123,66.249.73.246,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','139',',192.168.1.1,122.233.229.230,27.22.81.39,115.234.68.221,122.13.242.170,49.77.179.70,175.44.140.225,123.138.215.126,58.101.221.113,60.213.45.46,202.105.64.223,203.208.60.37,61.164.65.130,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','137',',192.168.1.1,117.23.104.92,106.44.206.80,122.233.229.230,113.137.173.234,36.250.225.202,121.35.230.122,180.110.220.136,203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','136',',192.168.1.1,175.160.46.46,110.53.148.230,113.134.224.107,122.233.229.230,192.168.1.232,36.63.194.228,14.147.90.38,58.63.88.235,203.208.60.147,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','135',',192.168.1.1,122.233.229.230,115.234.68.221,122.13.242.170,111.204.252.1,171.117.251.95,101.226.61.189,203.208.60.47,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','134',',192.168.1.1,203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','133',',192.168.1.1,122.13.242.170,123.138.215.126,203.208.60.151,42.122.177.160,183.16.188.250,');");
E_D("replace into `phome_enewsdiggips` values('3','132',',192.168.1.1,113.200.204.158,116.6.95.210,115.193.181.222,101.226.89.117,171.94.163.246,140.240.88.103,203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','98',',192.168.1.1,106.44.206.80,113.205.69.252,203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','119',',192.168.1.1,106.44.206.80,113.240.76.37,203.208.60.158,222.72.188.71,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','52',',192.168.1.1,172.56.30.97,203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','58',',106.44.206.80,172.56.30.97,60.22.119.201,203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','121',',119.179.200.107,203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','40',',27.22.81.39,203.208.60.153,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','71',',113.97.48.85,58.251.146.243,203.208.60.154,203.208.60.88,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','88',',115.234.68.221,203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','87',',115.230.249.217,203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','118',',71.119.73.93,203.208.60.146,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','127',',71.119.73.93,36.63.192.138,180.110.180.250,180.153.206.37,119.5.215.135,112.80.235.174,203.208.60.153,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','117',',71.119.73.93,111.199.136.138,203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','54',',175.44.140.225,203.208.60.158,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','51',',175.44.140.225,203.208.60.158,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','78',',175.44.140.225,203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','49',',175.44.140.225,203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','95',',124.202.190.237,58.241.160.155,113.137.32.16,203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','95',',101.226.33.224,');");
E_D("replace into `phome_enewsdiggips` values('2','112',',123.138.215.126,203.208.60.150,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','91',',183.2.148.243,203.208.60.150,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','130',',36.250.171.94,203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','75',',123.146.248.222,66.249.67.85,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','114',',59.58.36.219,203.208.60.149,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','129',',58.101.221.113,203.208.60.159,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('13','147',',192.168.1.1,111.85.174.54,171.116.109.159,123.121.32.178,111.201.148.58,111.206.128.184,218.94.134.178,180.153.163.187,123.117.39.232,60.14.255.130,119.5.215.135,218.15.119.150,171.117.253.59,114.66.199.5,183.93.221.243,203.208.60.46,220.168.26.200,66.249.75.189,117.70.131.98,139.200.240.83,203.208.60.149,119.5.53.84,113.205.69.252,203.208.60.153,106.113.87.131,121.32.113.226,116.226.249.190,101.226.102.97,113.132.74.69,42.157.10.24,106.42.118.94,116.253.153.243,58.48.193.110,42.122.177.160,116.17.197.241,180.153.211.172,');");
E_D("replace into `phome_enewsdiggips` values('13','146',',192.168.1.1,120.86.35.209,119.5.215.135,121.22.249.203,112.228.133.196,203.208.60.53,203.208.60.50,113.205.69.252,66.249.79.78,121.32.113.226,218.106.145.61,120.37.87.152,223.199.254.172,42.122.177.160,180.141.134.247,');");
E_D("replace into `phome_enewsdiggips` values('13','145',',192.168.1.1,112.228.133.196,203.208.60.48,66.249.75.205,203.208.60.162,121.32.113.226,42.122.177.160,183.35.160.114,');");
E_D("replace into `phome_enewsdiggips` values('13','143',',192.168.1.1,203.208.60.52,118.213.149.186,66.249.65.66,203.208.60.161,121.32.113.226,42.122.177.160,58.221.154.90,');");
E_D("replace into `phome_enewsdiggips` values('13','144',',192.168.1.1,183.63.218.253,42.122.29.189,123.169.102.77,112.228.133.196,203.208.60.40,203.208.60.49,115.217.222.99,203.208.60.150,203.208.60.151,203.208.60.145,203.208.60.152,42.122.177.160,66.249.67.158,66.249.79.6,66.249.79.98,66.249.65.158,66.249.69.10,');");
E_D("replace into `phome_enewsdiggips` values('3','128',',192.168.1.1,112.80.235.174,203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','110',',118.254.236.120,203.208.60.146,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','131',',118.254.236.120,113.138.219.183,203.208.60.155,42.122.177.160,111.227.88.3,');");
E_D("replace into `phome_enewsdiggips` values('3','123',',42.232.75.101,180.153.163.209,203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','46',',60.14.255.130,203.208.60.160,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','125',',171.83.20.206,203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','77',',14.122.104.138,203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','126',',139.205.204.76,122.225.54.130,203.208.60.149,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','45',',203.208.60.52,119.5.53.84,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','80',',203.208.60.39,42.122.177.160,49.114.98.125,');");
E_D("replace into `phome_enewsdiggips` values('5','56',',203.208.60.45,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','72',',203.208.60.44,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','69',',203.208.60.40,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','59',',203.208.60.159,203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','113',',203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','107',',203.208.60.160,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','73',',203.208.60.153,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','93',',203.208.60.146,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','83',',203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','43',',203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','102',',203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','41',',203.208.60.149,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','65',',203.208.60.152,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','105',',203.208.60.160,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','50',',203.208.60.159,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','44',',203.208.60.148,203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','64',',203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','61',',203.208.60.146,203.208.60.155,183.11.22.52,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','48',',203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','70',',203.208.60.152,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','109',',203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','106',',203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','120',',203.208.60.147,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','76',',203.208.60.150,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','103',',203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','86',',203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','115',',203.208.60.157,123.151.153.36,60.255.0.20,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','62',',203.208.60.155,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','82',',203.208.60.158,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','116',',203.208.60.147,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','111',',203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','94',',203.208.60.158,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','57',',203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','47',',203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','99',',203.208.60.156,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','66',',203.208.60.154,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','90',',203.208.60.148,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','63',',203.208.60.146,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','55',',203.208.60.153,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','81',',203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','97',',203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','100',',203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','79',',203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','89',',203.208.60.158,27.186.125.31,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','124',',203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','104',',203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','53',',203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','67',',203.208.60.149,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','60',',203.208.60.156,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','96',',203.208.60.155,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','74',',203.208.60.162,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('5','42',',203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','108',',203.208.60.157,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','92',',203.208.60.153,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('2','101',',203.208.60.151,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','84',',203.208.60.145,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('1','85',',203.208.60.158,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('3','122',',203.208.60.161,42.122.177.160,');");
E_D("replace into `phome_enewsdiggips` values('4','68',',203.208.60.151,42.122.177.160,');");

@include("../../inc/footer.php");
?>