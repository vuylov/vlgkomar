<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use app\models\File;
/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    public $layout = 'section';

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access'    => [
                'class' => AccessControl::className(),
                'only'  => ['update', 'delete', 'create', 'view', 'index'],
                'rules' => [[
                    'allow' => true,
                    'roles' => ['@']
                ]]
            ]
        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'product' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post())) {

            $thumb = UploadedFile::getInstance($model, 'thumbnail');

            if($thumb){
                $name = 'upload/'.Yii::$app->security->generateRandomString(16).'.'.$thumb->extension;
                if($thumb->saveAs($name)){
                    $model->thumb = $name;
                }
            }

            $model->save();//save here for get id

            $files  = UploadedFile::getInstances($model, 'files');
            if($files){
                foreach($files as $file){
                    $f                  = new File();
                    $f->product_id      = $model->id;
                    $f->name            = Yii::$app->security->generateRandomString(16).'.'.$file->extension;
                    $f->rawname         = $file->name;
                    $f->path            = 'upload/'.$f->name;
                    if($f->save()){
                        $file->saveAs($f->path);
                    }
                    unset($f);
                }
            }

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post())) {

            $thumb = UploadedFile::getInstance($model, 'thumbnail');

            if($thumb){
                $model->deleteThumbFile();
                $name = 'upload/'.Yii::$app->security->generateRandomString(16).'.'.$thumb->extension;
                if($thumb->saveAs($name)){
                    $model->thumb = $name;
                }
            }

            $files  = UploadedFile::getInstances($model, 'files');
            if($files){
                $model->deleteFiles();

                foreach($files as $file){
                    $f                  = new File();
                    $f->product_id      = $model->id;
                    $f->name            = Yii::$app->security->generateRandomString(16).'.'.$file->extension;
                    $f->rawname         = $file->name;
                    $f->path            = 'upload/'.$f->name;
                    if($f->save()){
                        $file->saveAs($f->path);
                    }
                    unset($f);
                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
