var wms_layers = [];


        var lyr_GoogleMaps_0 = new ol.layer.Tile({
            'title': 'GoogleMaps',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}'
            })
        });
var format_DataTokoObatHamadiKotaBogor02_1 = new ol.format.GeoJSON();
var features_DataTokoObatHamadiKotaBogor02_1 = format_DataTokoObatHamadiKotaBogor02_1.readFeatures(json_DataTokoObatHamadiKotaBogor02_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_DataTokoObatHamadiKotaBogor02_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_DataTokoObatHamadiKotaBogor02_1.addFeatures(features_DataTokoObatHamadiKotaBogor02_1);
var lyr_DataTokoObatHamadiKotaBogor02_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_DataTokoObatHamadiKotaBogor02_1, 
                style: style_DataTokoObatHamadiKotaBogor02_1,
                interactive: true,
                title: '<img src="styles/legend/DataTokoObatHamadiKotaBogor02_1.png" /> Data Toko Obat Hama di Kota Bogor 02'
            });

lyr_GoogleMaps_0.setVisible(true);lyr_DataTokoObatHamadiKotaBogor02_1.setVisible(true);
var layersList = [lyr_GoogleMaps_0,lyr_DataTokoObatHamadiKotaBogor02_1];
lyr_DataTokoObatHamadiKotaBogor02_1.set('fieldAliases', {'Nama_toko': 'Nama_toko', 'Rating': 'Rating', 'Alamat': 'Alamat', 'Lattitude': 'Lattitude', 'Longitude': 'Longitude', });
lyr_DataTokoObatHamadiKotaBogor02_1.set('fieldImages', {'Nama_toko': '', 'Rating': '', 'Alamat': '', 'Lattitude': '', 'Longitude': '', });
lyr_DataTokoObatHamadiKotaBogor02_1.set('fieldLabels', {'Nama_toko': 'no label', 'Rating': 'no label', 'Alamat': 'no label', 'Lattitude': 'no label', 'Longitude': 'no label', });
lyr_DataTokoObatHamadiKotaBogor02_1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});