<?php
session_start();
session_destroy();
header('location:../tukangin/admin/pages/login.php');
