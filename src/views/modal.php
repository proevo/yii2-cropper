<?php
/**
 *
 * this html text must be 1 line for javascript content
 *
 */
/** @var $unique string */
/** @var $cropperOptions [] */

//$modalLabel = Yii::t('cropper', 'Image Crop Editor');
$modalLabel = 'Editor de imagem';
$browseLabel = $cropperOptions['icons']['browse'] . ' ' . Yii::t('cropper', 'Browse');
$cropLabel = $cropperOptions['icons']['crop'] . ' ' . Yii::t('cropper', 'Crop');
//$closeLabel = $cropperOptions['icons']['close'] . ' ' . Yii::t('cropper', 'Crop') . ' & ' . Yii::t('cropper', 'Close');
$closeLabel = $cropperOptions['icons']['close'] . ' Cortar';

$cropWidth = $cropperOptions['width'];
$cropHeight = $cropperOptions['height'];

echo '<div class="modal fade" tabindex="-1" role="dialog" id="cropper-modal-'. $unique .'">'
    .'<div class="modal-dialog modal-lg" role="document">'
        .'<div class="modal-content">'
            .'<div class="modal-header">'
                .'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                .'<h4 class="modal-title" id="modalLabel-'. $unique .'">'. $modalLabel .'</h4>'
            .'</div>'
            .'<div class="modal-body" style="height: 75vh; overflow: auto;">'
                .'<div><img id="cropper-image-'. $unique .'" src="" alt=""></div>'
            .'</div>'
            .'<div class="modal-footer">'
                .'<div class="pull-left">'
                    .'<div class="btn-group">'
                        .'<button type="button" class="btn btn-primary zoom-in">'.$cropperOptions['icons']['zoom-in'].'</span></button>'
                        .'<button type="button" class="btn btn-primary zoom-out">'.$cropperOptions['icons']['zoom-out'].'</button>'
                    .'</div>&nbsp;'
                    .'<div class="btn-group">'
                        .'<button type="button" class="btn btn-primary rotate-left">'.$cropperOptions['icons']['rotate-left'].'</button>'
                        .'<button type="button" class="btn btn-primary rotate-right">'.$cropperOptions['icons']['rotate-right'].'</button>'
                    .'</div>&nbsp;'
                .'</div>'
                .'<button type="button" id="close-button-'. $unique .'" class="btn btn-danger" data-dismiss="modal">'. $closeLabel .'</button>'
            .'</div>'
        .'</div>'
    .'</div>'
.'</div>';
