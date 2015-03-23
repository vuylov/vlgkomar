<?php

namespace app\controllers;

use app\models\Product;
use Yii;
use app\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
                'only'  => ['update', 'delete', 'create'],
                'rules' => [[
                    'allow' => true,
                    'roles' => ['@']
                ]]
            ]
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        $categories = Category::find()->all();

        return $this->render('index', [
            'dataProvider'  => $dataProvider,
            'categories'      => $categories
        ]);
    }

    /**
     * Displays a single Category model.
     * @param integer $id
     * @return mixed
     * @throws \HttpException
     */
    public function actionView($id, $product = null)
    {
        if($product === null && $id){

            $category   = $this->findModel($id);
            $products   = $category->getProducts()->orderBy('order')->all();

            return $this->render('view', [
                'category'     => $category,
                'products'  => $products
            ]);
        }elseif($product && $id){

            $category   = $this->findModel($id);
            $product    = Product::find()->with(['files'])->where('id = :id', [':id' => $product])->one();

            return $this->render('//product/view', [
                'category'  => $category,
                'product'   => $product
            ]);
        }else{
            throw new \HttpException('Страница не найдена');
        }
    }

    /**
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post())) {

            $model->file = UploadedFile::getInstance($model, 'file');

            if($model->file){
                $name = 'upload/'.Yii::$app->security->generateRandomString(16).'.'.$model->file->extension;
                if($model->file->saveAs($name)){
                    $model->thumb = $name;
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
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->file = UploadedFile::getInstance($model, 'file');

            if($model->file){
                $model->deleteThumbFile();
                $name = 'upload/'.Yii::$app->security->generateRandomString(16).'.'.$model->file->extension;
                if($model->file->saveAs($name)){
                    $model->thumb = $name;
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
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
