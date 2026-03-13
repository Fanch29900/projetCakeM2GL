<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Quartier Model
 *
 * @method \App\Model\Entity\Quartier newEmptyEntity()
 * @method \App\Model\Entity\Quartier newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Quartier> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Quartier get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Quartier findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Quartier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Quartier> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Quartier|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Quartier saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Quartier>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quartier>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quartier>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quartier> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quartier>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quartier>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Quartier>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Quartier> deleteManyOrFail(iterable $entities, array $options = [])
 */
class QuartierTable extends Table
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

        $this->setTable('quartier');
        $this->setDisplayField('nom_quartier');
        $this->setPrimaryKey('id');

        $this->hasMany('BureauVote', [
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
            ->scalar('nom_quartier')
            ->maxLength('nom_quartier', 150)
            ->requirePresence('nom_quartier', 'create')
            ->notEmptyString('nom_quartier');

        $validator
            ->integer('nb_habitant')
            ->requirePresence('nb_habitant', 'create')
            ->notEmptyString('nb_habitant');

        return $validator;
    }
}
