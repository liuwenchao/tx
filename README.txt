TX is a (completely made up) PHP framework for web development. It currently only outputs a static number of red bars. 

Actually, that's a lie. Currently it has some bugs that prevent it from doing so. Fix those bugs and then update the framework to do the following:

  - Accept a url parameter 'bars' that can change the number of bars created
      - default to 4 if no parameter is given
  - Add support for another url endpoint, /api/, that outputs the number of bars to be generated in JSON format: {num_bars: X}
      - The /api/ endpoint should also support a 'callback' parameter to specify a JSONP callback.
      - This should also support the 'bars' parameter above
  - Have the bars dynamically sized on the page so that they 
      a) don't wrap around when there are too many
      b) fill the entire width of #bars when there are too few
      c) expand and contract dynamically with the page but without a pageload
      
Be sure to read through the code of TX and it's associated files so you have a grasp of how it all fits together. TX should support adding all of the features above with minimal additions.

Please keep the general structure of the framework in tact, but make any security or performance enhancements as necessary.