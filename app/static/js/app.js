var s, that;

/**
 * Common actions
 */
function Common() {
  
  this.settings = {
    exit_overlay: $('.exit-overlay')
  };

  this.init = function() {
    s = this.settings;

    this.exit_overlay();
  };

  this.exit_overlay = function() {
    s.exit_overlay.on('click', function() {
      var target = $('#' + $(this).data('target'));
      $('body').removeClass('blur');
      target.removeClass('visible');
    });
  };

  this.init();
}

/**
 * View a poll
 */
function ViewPoll() {
  this.settings = {
    share: {
      trigger: $('#share-view-trigger'),
      view: $('#share-view')
    }
  };

  this.init = function() {
    s = this.settings;
    this.show_share_options();
  };

  this.show_share_options = function() {
    s.share.trigger.on('click', function() {
      s.share.view.addClass('visible');
      $('body').addClass('blur');
    });
  };

  this.init();
}

function CreatePoll() {
  console.log('create running')
}

// run the app
App = function() {
  this.Common = Common;
  this.ViewPoll = ViewPoll;
  this.CreatePoll = CreatePoll;
};

App = new App();