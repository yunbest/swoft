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
 * 产品内容表

 * @Entity()
 * @Table(name="mallbuilder_product_detail")
 * @uses      MallbuilderProductDetail
 */
class MallbuilderProductDetail extends Model
{
    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int $proid 产品ID
     * @Column(name="proid", type="integer")
     */
    private $proid;

    /**
     * @var string $detail 内容
     * @Column(name="detail", type="text", length=65535)
     */
    private $detail;

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setProid(int $value): self
    {
        $this->proid = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setDetail(string $value): self
    {
        $this->detail = $value;

        return $this;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getProid()
    {
        return $this->proid;
    }

    /**
     * 内容
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

}
