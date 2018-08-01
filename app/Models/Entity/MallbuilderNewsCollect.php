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
 * @Entity()
 * @Table(name="mallbuilder_news_collect")
 * @uses      MallbuilderNewsCollect
 */
class MallbuilderNewsCollect extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $nid 新闻id
     * @Column(name="nid", type="string", length=64)
     * @Required()
     */
    private $nid;

    /**
     * @var string $uid 用户id
     * @Column(name="uid", type="string", length=64)
     * @Required()
     */
    private $uid;

    /**
     * @var string $title 新闻标题
     * @Column(name="title", type="string", length=255)
     * @Required()
     */
    private $title;

    /**
     * @var string $img 新闻缩略图url
     * @Column(name="img", type="string", length=255)
     * @Required()
     */
    private $img;

    /**
     * @var string $collecttime 收藏时间
     * @Column(name="collecttime", type="timestamp", default="0000-00-00 00:00:00")
     */
    private $collecttime;

    /**
     * @var int $status 0:未收藏1：已收藏
     * @Column(name="status", type="integer", default=0)
     */
    private $status;

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
     * 新闻id
     * @param string $value
     * @return $this
     */
    public function setNid(string $value): self
    {
        $this->nid = $value;

        return $this;
    }

    /**
     * 用户id
     * @param string $value
     * @return $this
     */
    public function setUid(string $value): self
    {
        $this->uid = $value;

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
     * 新闻缩略图url
     * @param string $value
     * @return $this
     */
    public function setImg(string $value): self
    {
        $this->img = $value;

        return $this;
    }

    /**
     * 收藏时间
     * @param string $value
     * @return $this
     */
    public function setCollecttime(string $value): self
    {
        $this->collecttime = $value;

        return $this;
    }

    /**
     * 0:未收藏1：已收藏
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
     * 新闻id
     * @return string
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * 用户id
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
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
     * 新闻缩略图url
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * 收藏时间
     * @return mixed
     */
    public function getCollecttime()
    {
        return $this->collecttime;
    }

    /**
     * 0:未收藏1：已收藏
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
