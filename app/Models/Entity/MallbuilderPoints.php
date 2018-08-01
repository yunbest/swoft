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
 * 信誉积分表

 * @Entity()
 * @Table(name="mallbuilder_points")
 * @uses      MallbuilderPoints
 */
class MallbuilderPoints extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $points 积分
     * @Column(name="points", type="string", length=200)
     * @Required()
     */
    private $points;

    /**
     * @var string $img 图片
     * @Column(name="img", type="string", length=20)
     * @Required()
     */
    private $img;

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
     * 积分
     * @param string $value
     * @return $this
     */
    public function setPoints(string $value): self
    {
        $this->points = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setImg(string $value): self
    {
        $this->img = $value;

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
     * 积分
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * 图片
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

}
