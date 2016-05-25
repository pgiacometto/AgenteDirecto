<!-- nav-tabs -->
<ul class="site-sidebar-nav nav nav-tabs nav-justified nav-tabs-line" data-plugin="nav-tabs"
role="tablist">
  <li class="active" role="presentation">
    <a data-toggle="tab" href="#sidebar-userlist" role="tab">
      <i class="icon md-comment" aria-hidden="true"></i>
    </a>
  </li>
  
  <!--li role="presentation">
    <a data-toggle="tab" href="#sidebar-setting" role="tab">
      <i class="icon md-settings" aria-hidden="true"></i>
    </a>
  </li-->
</ul>

<div class="site-sidebar-tab-content tab-content">
  <div class="tab-pane fade active in" id="sidebar-userlist">
    <div>
      <div>
        <h5 class="clearfix">¿Necesitas ayuda?</h5>
          <!--div class="pull-right">
            <a class="text-action" href="javascript:void(0)" role="button">
              <i class="icon md-plus" aria-hidden="true"></i>
            </a>
            <a class="text-action" href="javascript:void(0)" role="button">
              <i class="icon md-more" aria-hidden="true"></i>
            </a>
          </div-->
        
        <!--form class="margin-vertical-20" role="search">
          <div class="input-search input-search-dark">
            <i class="input-search-icon md-search" aria-hidden="true"></i>
            <input type="text" class="form-control" id="inputSearch" name="search" placeholder="Search Pages">
            <button type="button" class="input-search-close icon md-close" aria-label="Close"></button>
          </div>
        </form-->

        <div class="list-group">
          
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="media-left">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/8.jpg" alt="..." />
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Operador #1</h4>
                <small>Cargo</small>
              </div>
            </div>
          </a>
          <a class="list-group-item" href="javascript:void(0)" data-toggle="show-chat">
            <div class="media">
              <div class="media-left">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://randomuser.me/api/portraits/men/9.jpg" alt="..." />
                  <i></i>
                </div>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Operador #2</h4>
                <small>Cargo</small>
              </div>
            </div>
          </a>
         
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="sidebar-activity">
    <div>
      <div>
        <h5>Actividades Recientes</h5>
        <ul class="timeline timeline-icon timeline-single timeline-simple timeline-feed">
          <li class="timeline-item">
            <div class="timeline-dot bg-pink-600">
              <i class="icon md-favorite" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2016-07-08">6 minutes ago</time>
              </small>
              <p>Melissa liked your activity Drinks At My Place.</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot bg-green-600">
              <i class="icon md-check" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2016-07-08">10 minutes ago</time>
              </small>
              <p>Tina is attending your activity Coffee @Starbucks</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot bg-green-600">
              <i class="icon md-comment" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2016-07-08">15 minutes ago</time>
              </small>
              <p>Melissa liked your activity Drinks At My Place.</p>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-dot">
              <i class="icon md-plus" aria-hidden="true"></i>
            </div>
            <div class="timeline-content">
              <small>
                <time datetime="2016-07-08">20 minutes ago</time>
              </small>
              <p>Josh is now following you</p>
            </div>
          </li>
        </ul>

        <h5 class="margin-top-50">TASK STATISTICS</h5>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Features development</div>
            <div class="progress-label">70%</div>
          </div>
          <div class="progress" data-goal="70" data-plugin="progress">
            <div class="progress-bar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="70"
            style="width: 70%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Uploading files</div>
            <div class="progress-label">30%</div>
          </div>
          <div class="progress" data-goal="60" data-plugin="progress">
            <div class="progress-bar progress-bar-success" aria-valuemin="0" aria-valuemax="100"
            aria-valuenow="30" style="width: 30%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
        <div class="contextual-progress">
          <div class="clearfix">
            <div class="progress-title">Traffc Margins</div>
            <div class="progress-label">90%</div>
          </div>
          <div class="progress" data-goal="60" data-plugin="progress">
            <div class="progress-bar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90"
            style="width: 90%" role="progressbar">
              <span class="progress-label"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--div class="tab-pane fade" id="sidebar-setting">
    <div>
      <div>
        <h5>GENERAL SETTINGS</h5>
        <ul class="list-group">
          <li class="list-group-item">
            <div class="pull-right margin-top-5">
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small"
              checked />
            </div>
            <h5>Notifications</h5>
            <p>Our very own image-less pure CSS and retina compatible check box.</p>
          </li>
          <li class="list-group-item">
            <div class="pull-right margin-top-5">
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small"
              checked />
            </div>
            <h5>Show your emails</h5>
            <p>Our very own image-less pure CSS and retina .</p>
          </li>
          <li class="list-group-item">
            <div class="pull-right margin-top-5">
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small"
              checked />
            </div>
            <h5>Show recent activity</h5>
            <p>Our very own image-less pure CSS and retina compatible check box.</p>
          </li>
          <li class="list-group-item">
            <div class="pull-right margin-top-5">
              <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small"
              checked />
            </div>
            <h5>Show Task statistics</h5>
            <p>Our very own image-less pure CSS and retina .</p>
          </li>
        </ul>
      </div>
    </div>
  </div-->
</div>

<div id="conversation" class="conversation">
  <div class="conversation-header">
    <a class="conversation-return pull-left" href="javascript:void(0)" data-toggle="close-chat">
      <i class="icon md-chevron-left" aria-hidden="true"></i>
    </a>
    <div class="conversation-title">
      Conversación con
      <a class="avatar margin-left-30" data-toggle="tooltip" href="#" data-placement="left"
      title="Operador #">
        <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="...">
      </a>
    </div>
  </div>
  <div class="chats">
    <div class="chat chat-right">
      <div class="chat-body">
        <div class="chat-content" data-toggle="tooltip" title="8:35 am">
          <p>
            I'm just looking around.
          </p>
          <p>Will you tell me something about yourself? </p>
        </div>
        <div class="chat-content" data-toggle="tooltip" title="8:40 am">
          <p>
            Are you there? That time!
          </p>
        </div>
      </div>
    </div>
    <div class="chat">
      <div class="chat-body">
        <div class="chat-content" data-toggle="tooltip" title="8:30 am">
          <p>
            Hello. What can I do for you?
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="conversation-reply">
    <div class="input-group">
      <!--span class="input-group-btn">
        <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-plus"></a>
      </span-->
      <input class="form-control" type="text" placeholder="Escribe aquí">

      <span class="input-group-btn">
        <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-image"></a>
      </span>
    </div>
  </div>
</div>