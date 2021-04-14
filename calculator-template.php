<?php
/*
 * Template Name: Calculator
 * Description: Calculator template
 */
 
 add_action('genesis_after_content', 'add_calculator');
 function add_calculator() {
   echo '
<h1>Calculator</h1>
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Construction Loan</th>
      <th scope="col">Cost of Recycled Bond Insurance</th>
      <th scope="col">Permanent Phase Savings</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Loan Amount</td>
      <td>-</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax Exempt Interest Rate</td>
      <td>--</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Taxable Rate</td>
      <td>--</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Construction Period</td>
      <td>--</td>
      <td>--</td>
    </tr>
  </tbody>
</table>';
 }

genesis();
