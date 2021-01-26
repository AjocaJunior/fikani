import AgoraRTC from 'agora-rtc-sdk';

   
// rtc object
var rtc = {
    client: null,
    joined: false,
    published: false,
    localStream: null,
    remoteStreams: [],
    params: {}
  };
  
  // Options for joining a channel
  var option = {
    appID: "92d92c101dba4189be971932decefb54",
    channel: "Educa Live Stream",
    uid: null,
    token: "00692d92c101dba4189be971932decefb54IADcOyrgnkId7kEACeRUw7Bl2bbA8JStpZoC9fxT0HD89zQ8bOAAAAAAEAANYBkGLkV2XwEAAQAvRXZf"
  }


  // Create a client
rtc.client = AgoraRTC.createClient({mode: "live", codec: "h264"});

// Initialize the client
rtc.client.init(option.appID, function () {
  console.log("init success");
  }, (err) => {
  console.error(err);
});

// The value of role can be "host" or "audience".
// rtc.client.setClientRole(role);

rtc.client.setClientRole("host", function(e) {
    if (!e) {
    console.log("setHost success");
    } else {
    console.log("setHost error", e);
    }
    }); 

// Join a channel
rtc.client.join(option.token ? option.token : null, option.channel, option.uid ? +option.uid : null, function (uid) {
    console.log("join channel: " + option.channel + " success, uid: " + uid);
    rtc.params.uid = uid;
  }, function(err) {
    console.error("client join failed", err)
})


// Create a local stream
rtc.localStream = AgoraRTC.createStream({
    streamID: rtc.params.uid,
    audio: true,
    video: true,
    screen: false,
  })

  // Initialize the local stream
rtc.localStream.init(function () {
    console.log("init local stream success");
    // play stream with html element id "local_stream"
    rtc.localStream.play("local_stream");
  }, function (err) {
    console.error("init local stream failed ", err);
  });


  // Publish the local stream
rtc.client.publish(rtc.localStream, function (err) {
    console.log("publish failed");
    console.error(err);
  });


  rtc.client.on("stream-added", function (evt) {  
    var remoteStream = evt.stream;
    var id = remoteStream.getId();
    if (id !== rtc.params.uid) {
      rtc.client.subscribe(remoteStream, function (err) {
        console.log("stream subscribe failed", err);
      })
    }
    console.log('stream-added remote-uid: ', id);
  });


  rtc.client.on("stream-subscribed", function (evt) {
    var remoteStream = evt.stream;
    var id = remoteStream.getId();
    // Add a view for the remote stream.
    addView(id);
    // Play the remote stream.
    remoteStream.play("remote_video_" + id);
    console.log('stream-subscribed remote-uid: ', id);
  });


  rtc.client.on("stream-removed", function (evt) {
    var remoteStream = evt.stream;
    var id = remoteStream.getId();
    // Stop playing the remote stream.
    remoteStream.stop("remote_video_" + id);
    // Remove the view of the remote stream. 
    removeView(id);
    console.log('stream-removed remote-uid: ', id);
  });


  function addView (id, show) {
    if (!$("#" + id)[0]) {
      $("<div/>", {
        id: "remote_video_panel_" + id,
        class: "video-view",
      }).appendTo("#video");
      $("<div/>", {
        id: "remote_video_" + id,
        class: "video-placeholder",
      }).appendTo("#remote_video_panel_" + id);
      $("<div/>", {
        id: "remote_video_info_" + id,
        class: "video-profile " + (show ? "" :  "hide"),
      }).appendTo("#remote_video_panel_" + id);
      $("<div/>", {
        id: "video_autoplay_"+ id,
        class: "autoplay-fallback hide",
      }).appendTo("#remote_video_panel_" + id);
    }
  }
  function removeView (id) {
    if ($("#remote_video_panel_" + id)[0]) {
      $("#remote_video_panel_"+id).remove();
    }
  }



// Leave the channel
rtc.client.leave(function () {
    // Stop playing the local stream
    rtc.localStream.stop();
    // Close the local stream
    rtc.localStream.close();
    // Stop playing the remote streams and remove the views
    while (rtc.remoteStreams.length > 0) {
      var stream = rtc.remoteStreams.shift();
      var id = stream.getId();
      stream.stop();
      removeView(id);
    }
    console.log("client leaves channel success");
  }, function (err) {
    console.log("channel leave failed");
    console.error(err);
  });

  


   //     var client = AgoraRTC.createClient({mode: 'live', codec: "h264"});

    //     client.init(<APPID>, function () {
    //       console.log("AgoraRTC client initialized");
    //     }, function (err) {
    //       console.log("AgoraRTC client init failed", err);
    //     });
      

    //   localStream.init(function() {
    //       console.log("getUserMedia successfully");
    //       localStream.play('agora_local');
    //     }, function (err) {
    //       console.log("getUserMedia failed", err);
    //     });
      

    //   client.join(<TOKEN_OR_KEY>, <CHANNEL_NAME>, <UID>, function(uid) {
    //       console.log("User " + uid + " join channel successfully");
    //     }, function(err) {
    //       console.log("Join channel failed", err);
    //     });

    //     //publish local stream
    //     client.publish(localStream, function (err) {
    //       console.log("Publish local stream error: " + err);
    //     });

    //     client.on('stream-published', function (evt) {
    //       console.log("Publish local stream successfully");
    //     });

    //     //subscribe remote stream
    //     client.on('stream-added', function (evt) {
    //       var stream = evt.stream;
    //       console.log("New stream added: " + stream.getId());
    //       client.subscribe(stream, function (err) {
    //         console.log("Subscribe stream failed", err);
    //       });
    //     });

    //     client.on('stream-subscribed', function (evt) {
    //       var remoteStream = evt.stream;
    //       console.log("Subscribe remote stream successfully: " + remoteStream.getId());
    //       remoteStream.play('agora_remote' + remoteStream.getId());
    //     })
      
      
    //   client.leave(function () {
    //       console.log("Leave channel successfully");
    //     }, function (err) {
    //       console.log("Leave channel failed");
    //     });
      


    //   {/* https://console.agora.io/invite?sign=c18687c00290f02a5bb8b8e99092ba32%3Ac47cc10b289fcbbbac019be31bcf7846a418b1c6cdd7d4ede5c983b64fd00521</APPID> */}