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
 * 证书表

 * @Entity()
 * @Table(name="mallbuilder_certificate")
 * @uses      MallbuilderCertificate
 */
class MallbuilderCertificate extends Model
{
    /**
     * @var int $cid 编号
     * @Id()
     * @Column(name="cid", type="integer")
     */
    private $cid;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=255)
     */
    private $displayorder;

    /**
     * @var string $certificate 证书名称
     * @Column(name="certificate", type="string", length=100)
     * @Required()
     */
    private $certificate;

    /**
     * 编号
     * @param int $value
     * @return $this
     */
    public function setCid(int $value)
    {
        $this->cid = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

        return $this;
    }

    /**
     * 证书名称
     * @param string $value
     * @return $this
     */
    public function setCertificate(string $value): self
    {
        $this->certificate = $value;

        return $this;
    }

    /**
     * 编号
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * 排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * 证书名称
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

}
