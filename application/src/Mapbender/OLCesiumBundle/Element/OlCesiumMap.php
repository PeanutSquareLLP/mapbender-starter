<?php

namespace Mapbender\OLCesiumBundle\Element;

use Mapbender\CoreBundle\Element\Map;

/**
 * Class Openlayers4 Cesium map element
 *
 */
class OlCesiumMap extends Map
{
    /**
     * @inheritdoc
     */
    public static function getClassTitle()
    {
        return "OpenLayers4 Cesium Map";
    }

    /**
     * @inheritdoc
     */
    public function getWidgetName()
    {
        return 'mapbender.mbOlCesiumMap';
    }

    /**
     * @inheritdoc
     */
    public static function getClassDescription()
    {
        return "OpenLayers4 Cesium Map";
    }

    /**
     * @inheritdoc
     */
    public function render()
    {
        return '<div class="mb-element mb-element-ol-cesium-map" id="' . $this->getId() . '"></div>';
    }

    /**
     * @inheritdoc
     */
    public static function listAssets()
    {
        return array(
            'js'  => array(
                //'/components/ol-cesium/olcesium-debug.js',
                //'/components/ol-cesium/CesiumUnminified/Cesium.js',
                '/components/ol-cesium/olcesium.js',
                '/components/ol-cesium/Cesium/Cesium.js',
                'map.element.js'
            ),
            'css' => array(
                'map.element.scss'
            )
        );
    }
}