<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>导出</title>
</head>
<body>
    <form action="<?php echo U('Export/exportExcel');?>" method="post">
        <label for="">导出Excel</label>
        <input type="submit" value="导出">
    </form>
    <form action="<?php echo U('Export/exportCsv');?>" method="post">
        <label for="">导出Csv</label>
        <input type="submit" value="导出">
    </form>
    <form action="<?php echo U('Export/exportCsv');?>" method="post">
        <label for="">导出Csv(将数据分割保存在多个csv文件中，并且最后压缩成zip文件提供下载) - 未测试</label>
        <input type="submit" value="导出">
    </form>
    <form action="<?php echo U('Export/exportCsv');?>" method="post">
        <label for="">导出Csv(分批查询数据库导出数据) - 未测试</label>
        <input type="submit" value="导出">
    </form>
</body>
</html>