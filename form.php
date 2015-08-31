<?php
/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var FixtureGenerator $generator
 */

use understeam\fixture\FixtureGenerator;

echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'relationDepth');
echo $form->field($generator, 'generationDepth');
echo $form->field($generator, 'strategy')->dropDownList(FixtureGenerator::getStrategies());
echo $form->field($generator, 'query')->textarea([
    'rows' => 10,
]);