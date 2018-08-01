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
 * 友情链接表

 * @Entity()
 * @Table(name="mallbuilder_web_link")
 * @uses      MallbuilderWebLink
 */
class MallbuilderWebLink extends Model
{
    /**
     * @var int $linkid ID
     * @Id()
     * @Column(name="linkid", type="integer")
     */
    private $linkid;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var string $url 地址
     * @Column(name="url", type="string", length=200)
     */
    private $url;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint", default=0)
     */
    private $statu;

    /**
     * @var int $orderid 排序
     * @Column(name="orderid", type="integer", default=0)
     */
    private $orderid;

    /**
     * @var string $log logo
     * @Column(name="log", type="string", length=100)
     */
    private $log;

    /**
     * @var string $province 省ID
     * @Column(name="province", type="string", length=15)
     */
    private $province;

    /**
     * @var string $city 市ID
     * @Column(name="city", type="string", length=15)
     */
    private $city;

    /**
     * @var int $stime 开始时间
     * @Column(name="stime", type="integer")
     */
    private $stime;

    /**
     * @var int $etime 结束时间
     * @Column(name="etime", type="integer")
     */
    private $etime;

    /**
     * @var string $con 描述
     * @Column(name="con", type="text", length=65535)
     */
    private $con;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setLinkid(int $value)
    {
        $this->linkid = $value;

        return $this;
    }

    /**
     * 名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

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
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setOrderid(int $value): self
    {
        $this->orderid = $value;

        return $this;
    }

    /**
     * logo
     * @param string $value
     * @return $this
     */
    public function setLog(string $value): self
    {
        $this->log = $value;

        return $this;
    }

    /**
     * 省ID
     * @param string $value
     * @return $this
     */
    public function setProvince(string $value): self
    {
        $this->province = $value;

        return $this;
    }

    /**
     * 市ID
     * @param string $value
     * @return $this
     */
    public function setCity(string $value): self
    {
        $this->city = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStime(int $value): self
    {
        $this->stime = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param int $value
     * @return $this
     */
    public function setEtime(int $value): self
    {
        $this->etime = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getLinkid()
    {
        return $this->linkid;
    }

    /**
     * 名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * 状态
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 排序
     * @return int
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * logo
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * 省ID
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * 市ID
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * 描述
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

}
