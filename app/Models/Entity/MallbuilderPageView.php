<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 后台统计表

 * @Entity()
 * @Table(name="mallbuilder_page_view")
 * @uses      MallbuilderPageView
 */
class MallbuilderPageView extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $url 地址
     * @Column(name="url", type="string", length=200)
     */
    private $url;

    /**
     * @var string $ip ip
     * @Column(name="ip", type="char", length=20)
     */
    private $ip;

    /**
     * @var string $time 时间
     * @Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var string $username 会员
     * @Column(name="username", type="char", length=20)
     */
    private $username;

    /**
     * @var string $fileName 文件名
     * @Column(name="fileName", type="char", length=30)
     */
    private $fileName;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * ip
     * @param string $value
     * @return $this
     */
    public function setIp(string $value): self
    {
        $this->ip = $value;

        return $this;
    }

    /**
     * 时间
     * @param string $value
     * @return $this
     */
    public function setTime(string $value): self
    {
        $this->time = $value;

        return $this;
    }

    /**
     * 会员
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * 文件名
     * @param string $value
     * @return $this
     */
    public function setFileName(string $value): self
    {
        $this->fileName = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * 时间
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * 会员
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * 文件名
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

}
