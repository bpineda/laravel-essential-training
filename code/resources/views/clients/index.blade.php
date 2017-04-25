@extends('layouts.app')

@section('content')

<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clients</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="#">ADD NEW CLIENT</a></div>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="200">Email</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>
                          <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class="hollow button" href="#">EDIT</a>
                  <a class="hollow button warning" href="#">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Mrs. Bonnie Clark</td>
                <td>bclark6@bing.com</td>
                <td>
                  <a class="hollow button" href="#">EDIT</a>
                  <a class="hollow button warning" href="#">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Carol Shaw</td>
                <td>cshaw2e@marriott.com</td>
                <td>
                  <a class="hollow button" href="#">EDIT</a>
                  <a class="hollow button warning" href="#">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Dr. Timothy Watson</td>
                <td>twatson1k@shinystat.com</td>
                <td>
                  <a class="hollow button" href="#">EDIT</a>
                  <a class="hollow button warning" href="#">BOOK A ROOM</a>
                </td>
              </tr>
                          <tr>
                <td>Ms. Judith Young</td>
                <td>jyoung11@goodreads.com</td>
                <td>
                  <a class="hollow button" href="#">EDIT</a>
                  <a class="hollow button warning" href="#">BOOK A ROOM</a>
                </td>
              </tr>
                      </tbody>
        </table>
      </div>
    </div>

@endsection