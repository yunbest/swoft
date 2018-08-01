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
 * @Table(name="mallbuilder_news")
 * @uses      MallbuilderNews
 */
class MallbuilderNews extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $nid 
     * @Column(name="nid", type="string", length=64, default="0")
     */
    private $nid;

    /**
     * @var string $title 
     * @Column(name="title", type="string", length=64)
     * @Required()
     */
    private $title;

    /**
     * @var int $hits 
     * @Column(name="hits", type="integer", default=0)
     */
    private $hits;

    /**
     * @var int $share 分享数量
     * @Column(name="share", type="integer", default=0)
     */
    private $share;

    /**
     * @var string $img 
     * @Column(name="img", type="string", length=128)
     */
    private $img;

    /**
     * @var string $publisher 
     * @Column(name="publisher", type="string", length=64)
     */
    private $publisher;

    /**
     * @var string $content 
     * @Column(name="content", type="text", length=65535)
     * @Required()
     */
    private $content;

    /**
     * @var string $orign 
     * @Column(name="orign", type="string", length=250)
     * @Required()
     */
    private $orign;

    /**
     * @var string $date 
     * @Column(name="date", type="string", length=32)
     * @Required()
     */
    private $date;

    /**
     * @var int $status 0 表示删除，1表示正常显示
     * @Column(name="status", type="tinyint", default=1)
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
     * @param string $value
     * @return $this
     */
    public function setNid(string $value): self
    {
        $this->nid = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setHits(int $value): self
    {
        $this->hits = $value;

        return $this;
    }

    /**
     * 分享数量
     * @param int $value
     * @return $this
     */
    public function setShare(int $value): self
    {
        $this->share = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setImg(string $value): self
    {
        $this->img = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPublisher(string $value): self
    {
        $this->publisher = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOrign(string $value): self
    {
        $this->orign = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDate(string $value): self
    {
        $this->date = $value;

        return $this;
    }

    /**
     * 0 表示删除，1表示正常显示
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
     * @return string
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * 分享数量
     * @return int
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getOrign()
    {
        return $this->orign;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 0 表示删除，1表示正常显示
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}
