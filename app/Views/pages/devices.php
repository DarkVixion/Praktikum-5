<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="col">


        <div class="grid-container ">
            <table class="tabel table-bordered">
                <tr>
                    <td style=" text-align:center; "> ID </td>
                    <td style=" text-align:center; "> Device Name </td>
                    <td style=" text-align:center; "> Device Brand </td>
                    <td style=" text-align:center; "> Device quantity </td>
                    <td style=" text-align:center; "> Device Status </td>
                </tr>
                <tr>
                    <td style=" text-align:center; "> 1 </td>
                    <td style=" text-align:center; "> Smart Lamp </td>
                    <td style=" text-align:center; "> Huwaei </td>
                    <td style=" text-align:center; "> 2 </td>
                    <td style=" text-align:center; "> on </td>
                </tr>
                <tr>
                    <td style=" text-align:center; "> 2 </td>
                    <td style=" text-align:center; "> Smart car </td>
                    <td style=" text-align:center; "> Tesla </td>
                    <td style=" text-align:center; "> 1 </td>
                    <td style=" text-align:center; "> off </td>
                </tr>
                <tr>
                    <td style=" text-align:center; "> 3 </td>
                    <td style=" text-align:center; "> Smart IR </td>
                    <td style=" text-align:center; "> Bardi </td>
                    <td style=" text-align:center; "> 2 </td>
                    <td style=" text-align:center; "> off </td>
                </tr>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection();?>