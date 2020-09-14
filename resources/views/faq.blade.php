@extends('boilerplate')

@section('page')
<div style="background-color: white;" >
    <div style="float:left;background-color: white;">
            <button data-target="#talkWithBot" data-toggle="modal"  class="btn btn-primary pull-right">Talk with Bot</button><br/>
        <h4>What is the role of a VESIT R&D?</h4>
        <p>VESIT R&D combines both basic and applied research aims at providing innovative and indigenous solutions to critical design issues in engineering systems.
            </p><br/><br/>

        <h4>How will I benefit from VESIT R&D?
            </h4>
        <p>VESIT R&D will provide a unique solution for any research problem. We have a rich and diverse group of mentors from across the various fields of engineering who can will help in various aspects of research problem. 
            </p><br/><br/>
        
        <h4>What are the areas of businesses which get support from VESIT R&D?</h4>
        <p>VESIT R&D has expertise in the following domains (not exhaustive list):
                Nuclear Instrumentation
                Low level signal generation, Processing, conditioning and measurement.
                Nano-seconds timing techniques
                Fiber Optics Instrumentation
                High speed, high resolution digitization & data transfer techniques.
                Embedded systems.
                Big Data Analytics and Cloud Computing Internet of Things (IoT)
                The above domains are our areas of focus; we do take up projects which are multidisciplinary as well.
                </p><br/><br/>
        
        <h4>I have a research problem what should I do next?
            </h4>
        <p>Please do send us a mail giving a brief description of the research problem. VESIT R&D team will forward the same to the relevant area expert who will review the issue and will get in touch with you. This will be followed by detailed discussions to understand the design issue with more depth. VESIT R&D will work towards providing the best possible solution for your design issue.
            </p><br/><br/>
        
        <h4>My research problem is confidential. Can I trust VESIT with information?
            </h4>
        <p>Yes, definitely. Once the initial procedures are completed, a formal Non-Disclosure Agreement can be signed by you and VESIT. 
            </p><br/><br/>
        
        <h4>Does VESIT have access to scientific computing applications such as MATLAB, LabVIEW to solve my problem?
            </h4>
        <p>Yes. VESIT has licensed versions of various software like MATLAB, LabVIEW, Halcon etc.
            </p><br/><br/>
        
        <h4>Are funded projects taken up in VESIT?
            </h4>
        <p>Yes.  VESIT has completed various projects from reputed academic and research institutions as well as from industry. Minor research projects have been undertaken by various faculty members of VESIT
            </p><br/><br/>
        

    </div>

    <div class="modal fade" id="talkWithBot">
            <div class="modal-dialog">
                <div class="modal-content"  style="padding:10px;width:600px;margin-top:10px;">
                    <div class="modal-header">
                        <h3 class="modal-title text-center">VES-Bot</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
        
                    <div class="modal-body">
                            <iframe
                            allow="microphone;"
                            width="550"
                            height="380"
                            src="https://console.dialogflow.com/api-client/demo/embedded/cc100f6d-fa40-4d84-8e73-0ecf56abecb1"
                            >
                        </iframe>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection