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
 * 仓库表

 * @Entity()
 * @Table(name="mallbuilder_warehouse")
 * @uses      MallbuilderWarehouse
 */
class MallbuilderWarehouse extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $wname 
     * @Column(name="wname", type="string", length=100)
     * @Required()
     */
    private $wname;

    /**
     * @var int $gid 国家ID
     * @Column(name="gid", type="integer")
     * @Required()
     */
    private $gid;

    /**
     * @var int $states 
     * @Column(name="states", type="integer", default=1)
     */
    private $states;

    /**
     * @var string $comment 备注
     * @Column(name="comment", type="string", length=255)
     */
    private $comment;

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
    public function setWname(string $value): self
    {
        $this->wname = $value;

        return $this;
    }

    /**
     * 国家ID
     * @param int $value
     * @return $this
     */
    public function setGid(int $value): self
    {
        $this->gid = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStates(int $value): self
    {
        $this->states = $value;

        return $this;
    }

    /**
     * 备注
     * @param string $value
     * @return $this
     */
    public function setComment(string $value): self
    {
        $this->comment = $value;

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
    public function getWname()
    {
        return $this->wname;
    }

    /**
     * 国家ID
     * @return int
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * @return mixed
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * 备注
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

}
