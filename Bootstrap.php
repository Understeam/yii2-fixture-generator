<?php
/**
 * @link https://github.com/AnatolyRugalev
 * @copyright Copyright (c) AnatolyRugalev
 * @license https://tldrlegal.com/license/gnu-general-public-license-v3-(gpl-3)
 */
namespace understeam\fixture;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;

/**
 * Bootstrap class to load generator automatically
 * @author Anatoly Rugalev
 * @link https://github.com/AnatolyRugalev
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['fixture-generator'])) {
                $app->getModule('gii')->generators['fixture-generator'] = [
                    'class' => __NAMESPACE__ . '\\FixtureGenerator',
                ];
            }
        }
    }
}
