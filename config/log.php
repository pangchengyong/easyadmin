<?php
/// +----------------------------------------------------------------------
// | 99PHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018~2020 https://www.99php.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Mr.Chung <chung@99php.cn >
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 日志设置
// +----------------------------------------------------------------------
return [
    // 日志记录方式，内置 file socket 支持扩展
    'type'        => 'File',
    // 日志保存目录
    'path'        => '',
    // error和sql日志单独记录
    'apart_level' => ['error', 'print', 'login', 'sql','action'],
    // 日志记录级别
    'level'       => [],
    // 单文件日志写入
    'single'      => false,
    //单个日志文件的大小限制，超过后会自动记录到第二个文件
    'file_size'   => 2097152,
    // 最大日志文件数量
    'max_files'   => 30,
    // 是否关闭日志写入
    'close'       => false,
    'time_format' => 'c',
//    'json'        => true,
];