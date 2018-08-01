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
 * 新闻审核表

 * @Entity()
 * @Table(name="mallbuilder_news_publish")
 * @uses      MallbuilderNewsPublish
 */
class MallbuilderNewsPublish extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $userid 发布者id'
     * @Column(name="userid", type="string", length=64)
     * @Required()
     */
    private $userid;

    /**
     * @var string $title 新闻标题
     * @Column(name="title", type="string", length=255)
     * @Required()
     */
    private $title;

    /**
     * @var string $imagePath 缩略图
     * @Column(name="imagePath", type="string", length=255)
     * @Required()
     */
    private $imagePath;

    /**
     * @var string $content 新闻详情
     * @Column(name="content", type="string", length=255)
     * @Required()
     */
    private $content;

    /**
     * @var string $publisher 发布者
     * @Column(name="publisher", type="string", length=255)
     * @Required()
     */
    private $publisher;

    /**
     * @var string $orign 新闻来源
     * @Column(name="orign", type="string", length=255)
     * @Required()
     */
    private $orign;

    /**
     * @var int $status 状态0：未审核；1：审核通过
     * @Column(name="status", type="integer")
     * @Required()
     */
    private $status;

    /**
     * @var string $pubtime 发布时间：当前时间
     * @Column(name="pubtime", type="timestamp", default="0000-00-00 00:00:00")
     */
    private $pubtime;

    /**
     * @var string $verifyid 审核人id
     * @Column(name="verifyid", type="string", length=64)
     */
    private $verifyid;

    /**
     * @var string $verifyname 审核人
     * @Column(name="verifyname", type="string", length=255)
     */
    private $verifyname;

    /**
     * @var string $verifytime 审核通过时间
     * @Column(name="verifytime", type="date")
     */
    private $verifytime;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 发布者id'
     * @param string $value
     * @return $this
     */
    public function setUserid(string $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 新闻标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 缩略图
     * @param string $value
     * @return $this
     */
    public function setImagePath(string $value): self
    {
        $this->imagePath = $value;

        return $this;
    }

    /**
     * 新闻详情
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 发布者
     * @param string $value
     * @return $this
     */
    public function setPublisher(string $value): self
    {
        $this->publisher = $value;

        return $this;
    }

    /**
     * 新闻来源
     * @param string $value
     * @return $this
     */
    public function setOrign(string $value): self
    {
        $this->orign = $value;

        return $this;
    }

    /**
     * 状态0：未审核；1：审核通过
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 发布时间：当前时间
     * @param string $value
     * @return $this
     */
    public function setPubtime(string $value): self
    {
        $this->pubtime = $value;

        return $this;
    }

    /**
     * 审核人id
     * @param string $value
     * @return $this
     */
    public function setVerifyid(string $value): self
    {
        $this->verifyid = $value;

        return $this;
    }

    /**
     * 审核人
     * @param string $value
     * @return $this
     */
    public function setVerifyname(string $value): self
    {
        $this->verifyname = $value;

        return $this;
    }

    /**
     * 审核通过时间
     * @param string $value
     * @return $this
     */
    public function setVerifytime(string $value): self
    {
        $this->verifytime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 发布者id'
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 新闻标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 缩略图
     * @return string
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * 新闻详情
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 发布者
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * 新闻来源
     * @return string
     */
    public function getOrign()
    {
        return $this->orign;
    }

    /**
     * 状态0：未审核；1：审核通过
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 发布时间：当前时间
     * @return mixed
     */
    public function getPubtime()
    {
        return $this->pubtime;
    }

    /**
     * 审核人id
     * @return string
     */
    public function getVerifyid()
    {
        return $this->verifyid;
    }

    /**
     * 审核人
     * @return string
     */
    public function getVerifyname()
    {
        return $this->verifyname;
    }

    /**
     * 审核通过时间
     * @return string
     */
    public function getVerifytime()
    {
        return $this->verifytime;
    }

}
