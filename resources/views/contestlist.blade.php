@include('layout.admin.header') 

<style>
    .loader{
        border: 10px solid #f3f3f3;
        border-radius: 50%;
        border-top: 10px solid #514072;
        width: 80px;
        height: 80px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        margin: auto;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0px;
        position: fixed;
        display: none;
        z-index: 9999;
    }
    @-webkit-keyframes spin{
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin{
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>

<main class="content-wrapper">
  <div class="mdc-layout-grid">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
        <div class="mdc-card p-0">
          <h6 class="card-title card-padding pb-0">
            Contest List
          </h6>
          <div class="loader"></div>
          <div class="table-responsive">
            <table class="table table-hoverable">
              <thead>
                <tr>
                  <th class="text-left">SN.</th>
                  <th class="text-left">User ID</th>
                  <th class="text-left">Conversation ID</th>
                  <th class="text-right">Mobile No</th>
                  <th class="text-right">Image</th>
                  <th class="text-right">Is Approved</th>
                  <th class="text-right">Is Winner</th>
                  <th class="text-right">Approved BY</th>
                  <th class="text-right">Created AT</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                @if(!empty($data))
                @php($i = 1)
                @foreach($data as $list)
                <tr>
                  <td class="text-left">{{$i++}}</td>
                  <td class="text-left">
                    <p>{{$list['user_id']}}</p>
                  </td>
                  <td class="text-left">
                    <p>{{$list['conversation_id']}}</p>
                  </td>
                  <td class="text-right">
                    <p>{{$list['mobile_no']}}</p>
                  </td>
                  <td class="text-right">
                    <p><img src="{{$list['image_url']}}" width="80" alt="{{$list['user_id']}}" srcset=""></p>
                  </td>
                  <td class="text-right">
                  <p id="appendisapproved_{{$i}}"><?php 
                        if($list['is_approved']==null){
                            echo " ";
                        }else if($list['is_approved']==1){
                            echo "Yes";
                        }else if($list['is_approved'] == 2){
                            echo "No";
                        }else{
                            echo " ";
                        }
                    ?></p>
                  </td>
                  <td class="text-right">
                    <p>{{($list['is_winner']==1)?'Yes':''}}</p>
                  </td>
                  <td class="text-right">
                    <p>{{$list['approved_by']}}</p>
                  </td>
                  <td class="text-right">
                    <p>{{$list['created_at']}}</p>
                  </td>
                  <td class="text-right">
                  <p>
                      <?php 
                        if($list['is_approved']==1){
                            $check = "disabled";
                        }else{
                            $check = "";
                        }
                    ?>
                    <button type="submit" data-appendid="appendisapproved_{{$i}}" data-userid="{{auth()->user()->id}}" data-id="{{$list['id']}}" {{$check}}  class="mdc-button mdc-button--raised mdc-ripple-upgraded markapproved">Approve</button>
                  </p>
                  </td>
                </tr>
                @endforeach
                @php($i)
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@include('layout.admin.footer')