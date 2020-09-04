

@extends('shurjopayment.layouts.master')


@section('content')

<style>
	table, th, td {
	  border: 1px solid black;
	  border-collapse: collapse;
	}
	th, td{
		padding: 5px;
  text-align: center;
  }
  h1,h2,h3,h4,h5,h6{
	  margin-top: 20px;
  }
  .image img{
	display: block;
	max-width: 100%;
	max-height: 100%;
	/* padding: 5px; */
	margin-top: -185px;
	border: 1px solid black;
    padding: 5px;
	}

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your admit card</div>

                <div class="card-body">
                  <h3><center></center></h3>
					<div id="admitcard">

                        <div class="row justify-content-md-center" id="print-div">
                            <div class="col-md-12 mb-3">
                                <div class="text-center">
                                    <input type='button' class="btn btn-warning"  value=' Print ' id='printButton'>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <div class="tile" style="border-style: solid;
                                                        border-width: 2px;
                                                        border-color:black;">
                                <div class="tile-body">
                                    <div class="row justify-content-md-center">
                                        <div  class="col-md-12">
                                            <div class="text-center">
                                                <div class="row justify-content-end">
                                                    <div class="col-12">
                                                        <div id="headertop" class="">
                                                            <h3>{{Auth::user()->nameOfTheInstitution}}</h3>
                                                            <p>{{Auth::user()->addressOfTheInstitution}}<p>
                                                            <p>Admit Card</p>
                                                            <p>{{date('Y')}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <div style="overflow-x:auto;">
                                                <table style="width:100%">
                                                    <tr>
                                                    <th >Name:</th>
                                                    <td>{{Auth::user()->name}} </td>
                                                    <th>Student ID :</th>
                                                    <td>{{Auth::user()->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Class :</th>
                                                        <td colspan="3">{{Auth::user()->classname}} </td>

                                                    </tr>
                                                    <tr>
                                                        <th>Roll :</th>
                                                        <td colspan="3">{{Auth::user()->roll}} </td>
                                                    </tr>
                                                    <tr>
                                                        <th>..</th>
                                                        <td colspan="3">..</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mtb-2">
                                                <ul>
                                                    <li>Stundent Must Bring Admit Card In The Examination Room</li>
                                                    <li>Mobile Phone Resticted Around School Area.</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12 mtb-2">
                                                <div id="signature" class="float-left">
                                                    <h6>Principal</h6>
                                                </div>
                                                <div id="signature" class="float-right">
                                                    <h6>Exam Controller</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mtb-2">
                                                <div id="footer" class="text-center">
                                                    <h6>{{Auth::user()->nameOfTheInstitution}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  @section('script')
      <script>
          function hide(){
            document.getElementById("printButton").style.display="none";
          }

          function show(){
            document.getElementById("printButton").style.display="block";
          }
           function print(){

            $('#print-div').printThis({
                debug: false,               // show the iframe for debugging
                importCSS: true,            // import parent page css
                importStyle: true,         // import style tags
                printContainer: true,       // print outer container/$.selector
                loadCSS: "",                // path to additional css file - use an array [] for multiple
                pageTitle: "",              // add title to print page
                removeInline: false,        // remove inline styles from print elements
                removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                printDelay: 533,            // variable print delay
                header: null,               // prefix to html
                footer: null,               // postfix to html
                base: false,                // preserve the BASE tag or accept a string for the URL
                formValues: true,           // preserve input/form values
                canvas: false,              // copy canvas content
                doctypeString: '...',       // enter a different doctype for older markup
                removeScripts: false,       // remove script tags from print content
                copyTagClasses: false,      // copy classes from the html & body tag
                beforePrintEvent: null,     // function for printEvent in iframe
                beforePrint: hide,          // function called before iframe is filled
                afterPrint: show            // function called before iframe is removed
            });

            }
            print();

          $('#printButton').on("click",function(){
              alert('Your Admit is  ready to download');
              print();

          })



        </script>
    @endsection


