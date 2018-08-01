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
 * @Table(name="mallbuilder_product_consult")
 * @uses      MallbuilderProductConsult
 */
class MallbuilderProductConsult extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $catid 
     * @Column(name="catid", type="integer", default=0)
     */
    private $catid;

    /**
     * @var int $productMemberId 
     * @Column(name="product_member_id", type="integer", default=0)
     */
    private $productMemberId;

    /**
     * @var int $productId 
     * @Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var string $productName 
     * @Column(name="product_name", type="string", length=255)
     */
    private $productName;

    /**
     * @var int $memberId 
     * @Column(name="member_id", type="integer", default=0)
     */
    private $memberId;

    /**
     * @var string $memberName 
     * @Column(name="member_name", type="string", length=255)
     */
    private $memberName;

    /**
     * @var string $question 
     * @Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string $answer 
     * @Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var int $answerId 
     * @Column(name="answer_id", type="integer", default=0)
     */
    private $answerId;

    /**
     * @var int $questionTime 
     * @Column(name="question_time", type="integer")
     */
    private $questionTime;

    /**
     * @var int $answerTime 
     * @Column(name="answer_time", type="integer")
     */
    private $answerTime;

    /**
     * @var int $status 
     * @Column(name="status", type="tinyint", default=0)
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
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value): self
    {
        $this->catid = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setProductMemberId(int $value): self
    {
        $this->productMemberId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setProductId(int $value): self
    {
        $this->productId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProductName(string $value): self
    {
        $this->productName = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setQuestion(string $value): self
    {
        $this->question = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAnswer(string $value): self
    {
        $this->answer = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAnswerId(int $value): self
    {
        $this->answerId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setQuestionTime(int $value): self
    {
        $this->questionTime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAnswerTime(int $value): self
    {
        $this->answerTime = $value;

        return $this;
    }

    /**
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
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * @return int
     */
    public function getProductMemberId()
    {
        return $this->productMemberId;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @return int
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }

    /**
     * @return int
     */
    public function getQuestionTime()
    {
        return $this->questionTime;
    }

    /**
     * @return int
     */
    public function getAnswerTime()
    {
        return $this->answerTime;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
