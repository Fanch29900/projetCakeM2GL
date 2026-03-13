<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BureauVote Model
 *
 * @method \App\Model\Entity\BureauVote newEmptyEntity()
 * @method \App\Model\Entity\BureauVote newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BureauVote> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BureauVote get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BureauVote findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BureauVote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BureauVote> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BureauVote|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BureauVote saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BureauVote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BureauVote>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BureauVote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BureauVote> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BureauVote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BureauVote>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BureauVote>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BureauVote> deleteManyOrFail(iterable $entities, array $options = [])
 */
class BureauVoteTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bureau_vote');
        $this->setDisplayField('adr_bureau');
        $this->setPrimaryKey('id');

        $this->hasMany('Electeur', [
            'foreignKey' => 'id_bureau',
        ]);

        $this->belongsTo('Quartier', [
            'foreignKey' => 'id_quartier',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('adr_bureau')
            ->maxLength('adr_bureau', 150)
            ->requirePresence('adr_bureau', 'create')
            ->notEmptyString('adr_bureau');

        $validator
            ->integer('nb_accesseur')
            ->requirePresence('nb_accesseur', 'create')
            ->notEmptyString('nb_accesseur');

        $validator
            ->integer('id_quartier')
            ->requirePresence('id_quartier', 'create')
            ->notEmptyString('id_quartier');

        return $validator;
    }
}
