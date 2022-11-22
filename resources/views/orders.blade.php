@extends('layouts.master')
@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Orders</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Orders</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<div class="container my-5">
  <div class="orders">
    <h2 class="text-center">Détail des commandes</h2>
    <div class="table-responsive order_details_table">
      <div class="d-flex justify-content-between my-5 px-5">
      <h4>
        <i class="fas fa-receipt"></i>
        Order #452
      </h4>
      <h4>Date : 22/11/2022</h4>
      </div>
      <table class="table">
        <thead>
          <tr>
            <td class="col"><strong>Produit</strong></td>
            <td class="col"><strong>Quantité</strong></td>
            <td class="col"><strong>Total</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="col">Chaussures</td>
            <td class="col">3</td>
            <td class="col">750 €</td>
          </tr>
          <tr>
            <td class="col"><strong>Total HT :</strong></td>
            <td class="col"></td>
            <td class="col">750 €</td>
          </tr>
          <tr>
            <td class="col"><strong>Taxes :</strong></td>
            <td class="col"></td>
            <td class="col">5%</td>
          </tr>
          <tr>
            <td class="col"><strong>Total TTC :</strong></td>
            <td class="col"></td>
            <td class="col">787.50 €</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop