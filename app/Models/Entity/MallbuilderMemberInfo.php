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
 * 会员信息记录表

 * @Entity()
 * @Table(name="mallbuilder_member_info")
 * @uses      MallbuilderMemberInfo
 */
class MallbuilderMemberInfo extends Model
{
    /**
     * @var int $memberId 会员ID
     * @Id()
     * @Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var int $blog 微博数量
     * @Column(name="blog", type="integer", default=0)
     */
    private $blog;

    /**
     * @var int $friend 好友数量
     * @Column(name="friend", type="integer", default=0)
     */
    private $friend;

    /**
     * @var int $fan 粉丝数量
     * @Column(name="fan", type="integer", default=0)
     */
    private $fan;

    /**
     * @var int $points 积分
     * @Column(name="points", type="integer", default=0)
     */
    private $points;

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value)
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 微博数量
     * @param int $value
     * @return $this
     */
    public function setBlog(int $value): self
    {
        $this->blog = $value;

        return $this;
    }

    /**
     * 好友数量
     * @param int $value
     * @return $this
     */
    public function setFriend(int $value): self
    {
        $this->friend = $value;

        return $this;
    }

    /**
     * 粉丝数量
     * @param int $value
     * @return $this
     */
    public function setFan(int $value): self
    {
        $this->fan = $value;

        return $this;
    }

    /**
     * 积分
     * @param int $value
     * @return $this
     */
    public function setPoints(int $value): self
    {
        $this->points = $value;

        return $this;
    }

    /**
     * 会员ID
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 微博数量
     * @return int
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * 好友数量
     * @return int
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * 粉丝数量
     * @return int
     */
    public function getFan()
    {
        return $this->fan;
    }

    /**
     * 积分
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

}
