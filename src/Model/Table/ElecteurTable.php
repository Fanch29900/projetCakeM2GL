<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Electeur Model
 *
 * @method \App\Model\Entity\Electeur newEmptyEntity()
 * @method \App\Model\Entity\Electeur newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Electeur> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Electeur get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Electeur findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Electeur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Electeur> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Electeur|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Electeur saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Electeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Electeur>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Electeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Electeur> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Electeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Electeur>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Electeur>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Electeur> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ElecteurTable extends Table
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

        $this->setTable('electeur');
        $this->setDisplayField('nom');
        $this->setPrimaryKey('id');

        $this->belongsTo('BureauVote', [
            'foreignKey' => 'id_bureau',
            'joinType' => 'INNER',
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
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 50)
            ->requirePresence('prenom', 'create')
            ->notEmptyString('prenom');

        $validator
            ->date('date_naissance')
            ->requirePresence('date_naissance', 'create')
            ->notEmptyDate('date_naissance');

        $validator
            ->integer('id_bureau')
            ->requirePresence('id_bureau', 'create')
            ->notEmptyString('id_bureau');

        return $validator;
    }
}
