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
 * @Table(name="mallbuilder_product_account_logs")
 * @uses      MallbuilderProductAccountLogs
 */
class MallbuilderProductAccountLogs extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * @var int $userid 用户id
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string $excelAddr excel 文件地址
     * @Column(name="excel_addr", type="string", length=100)
     * @Required()
     */
    private $excelAddr;

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
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 用户id
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * excel 文件地址
     * @param string $value
     * @return $this
     */
    public function setExcelAddr(string $value): self
    {
        $this->excelAddr = $value;

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
     * 创建时间
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 用户id
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * excel 文件地址
     * @return string
     */
    public function getExcelAddr()
    {
        return $this->excelAddr;
    }

}
