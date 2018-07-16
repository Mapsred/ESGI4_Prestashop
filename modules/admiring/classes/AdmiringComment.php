<?php

/**
 * Class AdmiringComment
 */
class AdmiringComment extends ObjectModel
{
    /**
     *
     */
    const TABLE = "admiring_comment";

    /** @var integer $id_admiring_comment */
    public $id_admiring_comment;

    /** @var integer $id_product */
    public $id_product;

    /** @var integer $grade */
    public $grade;

    /** @var string $comment */
    public $comment;

    /** @var mixed $date_add */
    public $date_add;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => self::TABLE,
        'primary' => 'id_admiring_comment',
        'multilang' => false,
        'fields' => [
            'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'grade' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'],
            'comment' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false],
        ]
    ];

    /**
     * @return DbQuery
     */
    private static function getQueryBuilder()
    {
        $queryBuilder = new DbQuery();
        $queryBuilder->select('*');
        $queryBuilder->from(self::TABLE);

        return $queryBuilder;
    }

    /**
     * @return array
     */
    public static function findAll()
    {
        $queryBuilder = self::getQueryBuilder();
        $queryBuilder->orderBy('date_add DESC');

        return array_map(function (array $data) {
            return self::init($data);
        }, Db::getInstance()->executeS($queryBuilder));
    }

    /**
     * @param int $limit
     * @return array
     */
    public static function findByLimit($limit = 3)
    {
        $queryBuilder = self::getQueryBuilder();
        $queryBuilder->limit($limit);

        return array_map(function (array $data) {
            return self::init($data);
        }, Db::getInstance()->executeS($queryBuilder));
    }

    /**
     * @param $productId
     * @param $offset
     * @param $limit
     * @return array
     * @throws PrestaShopDatabaseException
     */
    public static function findByProductIdLimit($productId, $offset, $limit)
    {
        $queryBuilder = self::getQueryBuilder();
        $queryBuilder->where('id_product = ' . (int)$productId);
        $queryBuilder->orderBy('date_add DESC');
        $queryBuilder->limit($limit, $offset);

        return array_map(function (array $data) {
            return self::init($data);
        }, Db::getInstance()->executeS($queryBuilder));
    }

    /**
     * @param $productId
     * @return false|null|string
     */
    public static function countByProductId($productId)
    {
        $sql = new DbQuery();
        $sql->select('COUNT(*)');
        $sql->from(self::TABLE);
        $sql->where('id_product = ' . (int)$productId);

        return Db::getInstance()->getValue($sql);
    }

    /**
     * @param $idProducts
     * @return array|false|mysqli_result|null|PDOStatement|resource
     * @throws PrestaShopDatabaseException
     */
    public static function search($idProducts)
    {
        $sql = new DbQuery();
        $sql->select('id_product, AVG(grade) as grade_avg, COUNT(id_admiring_comment) as nb_comments');
        $sql->from(self::TABLE);
        $sql->where('id_product IN (' . implode(',', $idProducts) . ')');
        $sql->groupBy('id_product');

        return Db::getInstance()->executeS($sql);
    }

    /**
     * @param array $data
     * @return AdmiringComment
     */
    public static function init(array $data)
    {
        $admiringComment = new self();
        $admiringComment->id_admiring_comment = $data['id_admiring_comment'];
        $admiringComment->id_product = $data['id_product'];
        $admiringComment->grade = $data['grade'];
        $admiringComment->comment = $data['comment'];
        $admiringComment->date_add = $data['date_add'];

        return $admiringComment;
    }

}