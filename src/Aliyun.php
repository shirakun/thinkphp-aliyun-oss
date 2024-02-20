<?php
/**
 * @author    : flyaction
 * @date      : 2024/02/20
 * @createTime: 19:29
 * @link      https://xingdong365.com/
 */


namespace think\filesystem\driver;


use League\Flysystem\AdapterInterface;
use think\filesystem\Driver;
use Xxtime\Flysystem\Aliyun\OssAdapter;

/**
 * 阿里云oss driver
 * Class Aliyun
 * @package think\filesystem\driver
 */
class Aliyun extends Driver
{
    protected function createAdapter (): AdapterInterface
    {
        return new OssAdapter($this->config);
    }
}