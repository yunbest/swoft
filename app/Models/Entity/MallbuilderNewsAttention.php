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
 * @Table(name="mallbuilder_news_attention")
 * @uses      MallbuilderNewsAttention
 */
class MallbuilderNewsAttention extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $uid 用户id
     * @Column(name="uid", type="string", length=64)
     * @Required()
     */
    private $uid;

    /**
     * @var string $source 来源
     * @Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var string $attentiontime 关注时间
     * @Column(name="attentiontime", type="timestamp", default="0000-00-00 00:00:00")
     */
    private $attentiontime;

    /**
     * @var int $statu 0:未关注，1：已关注
     * @Column(name="statu", type="integer", default=0)
     */
    private $statu;

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
     * 来源
     * @param string $value
     * @return $this
     */
    public function setSource(string $value): self
    {
        $this->source = $value;

        return $this;
    }

    /**
     * 关注时间
     * @param string $value
     * @return $this
     */
    public function setAttentiontime(string $value): self
    {
        $this->attentiontime = $value;

        return $this;
    }

    /**
     * 0:未关注，1：已关注
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

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
     * 用户id
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * 来源
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 关注时间
     * @return mixed
     */
    public function getAttentiontime()
    {
        return $this->attentiontime;
    }

    /**
     * 0:未关注，1：已关注
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

}
