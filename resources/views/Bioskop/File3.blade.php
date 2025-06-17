@extends('Bioskop.navbar')

@section('content')
<style>
  body {
    background: linear-gradient(to right, #f8fafc, #e0f2fe);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  section.content {
    max-width: 1100px;
    margin: 3rem auto;
    padding: 2rem 2.5rem;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  }

  h1 {
    font-size: 3rem;
    font-weight: 800;
    color: #0f172a;
    text-align: center;
    margin-bottom: 2.5rem;
  }

  h2 {
    font-size: 1.8rem;
    color: #1e293b;
    margin-top: 3rem;
    margin-bottom: 1rem;
    border-left: 6px solid #0ea5e9;
    padding-left: 1rem;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
  }

  thead {
    background-color: #f0f9ff;
  }

  th, td {
    padding: 1rem 1.2rem;
    text-align: left;
    font-size: 1rem;
    color: #334155;
  }

  th {
    font-weight: 700;
  }

  tbody tr {
    background-color: #ffffff;
    border-bottom: 1px solid #e2e8f0;
    transition: background-color 0.3s ease;
  }

  tbody tr:hover {
    background-color: #f1f5f9;
  }

  @media (max-width: 600px) {
    table, thead, tbody, th, td, tr {
      display: block;
    }

    thead {
      display: none;
    }

    td {
      position: relative;
      padding-left: 50%;
    }

    td::before {
      position: absolute;
      top: 1rem;
      left: 1rem;
      width: 45%;
      padding-right: 1rem;
      white-space: nowrap;
      font-weight: bold;
      color: #475569;
    }

    tbody tr td:nth-child(1)::before { content: "Menu"; }
    tbody tr td:nth-child(2)::before { content: "Lokasi"; }
  }
</style>

<section class="content">
 <h2>🏢 CINEMA 🏢</h2>
  <table>
    <thead>
      <tr>
        <th>Nama Cinema</th>
        <th>Lokasi</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Cinema XXI Transmart</td><td>Jl. Soekarno-Hatta No.123, Bandung</td></tr>
      <tr><td>CGV Paris Van Java</td><td>Paris Van Java Mall, Bandung</td></tr>
      <tr><td>CGV Mal King</td><td>Jl.Kepatihan Bandung</td></tr>
      <tr><td>Cinema XXI Festival Citylink</td><td>Jl. Peta Kota Bandung</td></tr>
      <tr><td>Cinema XXI Braga Mall</td><td>Jl. Braga Kota Bandung</td></tr>
    </tbody>
  </table>
</section>
@endsection
