var questions = [
    {
        day: 1,
        title: "Goals in life",
        goal: "Setting goals helps couples strengthen their relationship as they then work together as a team towards a common aim. It can help you understand what is really important to you and to your partner, and having a common goal can help you to stick together, even during the most challenging times. It is about moving toward what you want, not necessarily achieving it. However, if you reach your goal, then don’t forget to celebrate together!",
        how_to: {
            text: "<p>Take a moment to imagine your life in the future, and focus specifically on your relationship. Think about where you want to be and what you want to do in the next six months to two years. Next imagine where you want your lives to be in five, ten and twenty years. Start making a list of practical and shoot-for-the-moon goals. Difficulties starting?</p>"
        },
        type: "basic-multiple",
        data: [
            {
                order: 1,
                question: "Ask yourself what values are important to me, to my relationship.",
                description: "Think of a bucket list of things you would like to do on your own, with your partner or with family or friends.",
                answer: {
                    // Answer with a camera shot
                    type: "picture",
                    file_url: "media/answers/user_id/some-picture.jpeg"
                }
            },
            {
                order: 2,
                question: "Imagine you bump into a friend 5 years from now.",
                description: "What would you like to be able to tell him about your private life, your relationship, and in particular your family, career, personal growth and other major achievements.",
                answer: {
                    // Answer with a audio recording
                    type: "audio",
                    file_url: "media/answers/user_id/some-picture.jpeg"
                }
            }
        ],
        outro: "When you have both finished your lists of goals it’s time to prioritize and get specific about how you will achieve these goals together. Keep it positive and don't criticize any ideas until you've had the chance to get them on the table first. Setting goals as a couple is as much about strengthening your bond as it is about achieving your actual goals.",
        background_info: {
            text: "<p>Want to know more about setting goals in life? Please have a look at the below articles that we have selected for you.</p>",
            articles: [
                {
                    url: "https://www.psychologytoday.com/blog/notes-self/201308/how-set-goals"
                },
                {
                    url: "http://www.wikihow.com/Set-Goals"
                },
                {
                    url: "http://www.yourtango.com/experts/brian-rzepczynski/9-steps-setting-and-reaching-relationship-goals"
                }
            ]
        },
        amazon_products: [
            {
                title: "Bucket List Couples Lovebook",
                url: "https://www.amazon.com/Bucket-List-Couples-Lovebook/dp/193680641X?ie=UTF8&pldnSite=1&redirect=true&refRID=0V82FHV1MRP97KHHY0WR&ref_=pd_sim_b_14"
            },
            {
                title: "Goal Setting Journal Best Tool",
                url: "https://www.amazon.com/Goal-Setting-Journal-Best-Tool/dp/1523982284/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1474977977&sr=8-12"
            },
            {
                title: "Write Down Make Happen Knowing",
                url: "https://www.amazon.com/Write-Down-Make-Happen-Knowing/dp/0684850028/ref=sr_1_1?s=books&ie=UTF8&qid=1474977839&sr=1-1&keywords=setting+goals"
            }
        ]
    },


    {
        day: 2,
        title: "What is your love language",

        goal: "<p>Discover your love language and your partners love language.</p><p>You come to understand how you experience love and to realise that you are most likely to express your love for another in the same way as you prefer to experience it yourself.</p><p>You might have heard of ‘The Five Love Languages’ by Dr. Gary Chapman. His first book on this subject was published in 1995 and has been consistently on the New York Times Best Seller list. Chapman holds that there are five main ways that people show their affection; this also tends to be the way they prefer to receive affection too: Words of Affirmation, Quality Time, Physical Touch, Acts of Service and Gifts.</p><p>Some people feel loved when their partner brings them a coffee in the morning: This is a great example of Act of Service.</p><p>Some need their partner to tell them how good they look or how well they handled something: These are words of Affirmation.</p><p>Some people always buy their partner a present if they’ve been away: Obviously this is Gifts.</p><p>Others require physical forms of affection such as a kiss or stroke through the hair: These are expressions of “Physical Touch”.</p>",

        how_to: {
            text: "<p><li>You and your partner separately do a test to discover your love language.</li><li>1. Open the test by pressing the buttom (see below)</li><li>2. Talk about your love language and think about your own needs and your partner’s.</li></p>"
        },
        type: "multiple-match-category",
        data: {
            results: [
                {
                    value: "a",
                    title: "Words of Affirmation",
                    description: "One of your deepest needs is the need to feel appreciated. Verbal compliments, words of appreciation, encouragement, kind and humble words are all ways to show love to you."
                },
                {
                    value: "b",
                    title: "Quality Time",
                    description: "You enjoy doing things together! We aren’t talking about just sitting in front of the T.V. together but really giving each other undivided attention. This means looking at each other, talking to each other, sharing your life with your partner."
                },
                {
                    value: "c",
                    title: "Receiving Gifts",
                    description: "You are happy to receive things from your loved ones. They don’t have to be expensive. The gift is a symbol of “s/he cares about me” and “s/he thinks of me”."
                },
                {
                    value: "d",
                    title: "Acts of Service",
                    description: "For you, actions speak louder than words! You prefer your partner to do things for you such as cooking a meal, giving a massage, cleaning the room… You like your partner to initiate the acts of service and put efforts into doing them to show that s/he cares."
                },
                {
                    value: "e",
                    title: "Physical Touch",
                    description: "You love to receive a hug, a kiss, squeezes on the shoulder, a pat on the back, a touch of the face, and an arm around the waist... Touches can be 10 times as powerful and comforting as any words!"
                }
            ],
            data: [
                {
                    order: 1,
                    options: [
                        {
                            value: "A",
                            text: "I like to receive notes of affirmation."
                        },
                        {
                            value: "E",
                            text: "I like to be hugged."
                        }
                    ]
                },


                {
                    order: 2,
                    options: [
                        {
                            value: "B",
                            text: "I like to spend one-to-one time with a person who is special to me."
                        },
                        {
                            value: "D",
                            text: "I feel loved when someone gives practical help to me."
                        }
                    ]
                },

                {
                    order: 3,
                    options: [
                        {
                            value: "C",
                            text: "I like it when people give me gifts."
                        },
                        {
                            value: "B",
                            text: "I like leisurely visits with friends and loved ones."
                        }
                    ]
                },

                {
                    order: 4,
                    options: [
                        {
                            value: "D",
                            text: "I feel loved when people do things to help me."
                        },
                        {
                            value: "E",
                            text: "I feel loved when people touch me."
                        }
                    ]
                },

                {
                    order: 5,
                    options: [
                        {
                            value: "E",
                            text: "I feel loved when someone I love or admire puts his or her arm around me."
                        },
                        {
                            value: "C",
                            text: "I feel loved when I receive a gift from someone I love or admire."
                        }
                    ]
                },

                {
                    order: 6,
                    options: [
                        {
                            value: "B",
                            text: "I like to go places with friends and loved ones."
                        },
                        {
                            value: "E",
                            text: "I like to high-five or hold hands with people who are special to me."
                        }
                    ]
                },

                {
                    order: 7,
                    options: [
                        {
                            value: "C",
                            text: "Visible symbols of love (gifts) are very important to me."
                        },
                        {
                            value: "A",
                            text: "I feel loved when people affirm me."
                        }
                    ]
                },

                {
                    order: 8,
                    options: [
                        {
                            value: "E",
                            text: "I like to sit close to people whom I enjoy being around."
                        },
                        {
                            value: "A",
                            text: "I like for people to tell me I am beautiful/handsome."
                        }
                    ]
                },

                {
                    order: 9,
                    options: [
                        {
                            value: "B",
                            text: "I like to spend time with friends and loved ones."
                        },
                        {
                            value: "C",
                            text: "I like to receive little gifts from friends and loved ones."
                        }
                    ]
                },
                {
                    order: 10,
                    options: [
                        {
                            value: "A",
                            text: "Words of acceptance are important to me."
                        },
                        {
                            value: "D",
                            text: "I know someone loves me when he or she helps me."
                        }
                    ]
                },
                {
                    order: 11,
                    options: [
                        {
                            value: "B",
                            text: "I like being together and doing things with friends and loved ones."
                        },
                        {
                            value: "A",
                            text: "I like it when kind words are spoken to me."
                        }
                    ]
                },
                {
                    order: 12,
                    options: [
                        {
                            value: "D",
                            text: "What someone does affects me more than what he or she says."
                        },
                        {
                            value: "E",
                            text: "Hugs make me feel connected and valued."
                        }
                    ]
                },
                {
                    order: 13,
                    options: [
                        {
                            value: "A",
                            text: "I value praise and try to avoid criticism."
                        },
                        {
                            value: "C",
                            text: "Several small gifts mean more to me than one large gift."
                        }
                    ]
                },
                {
                    order: 14,
                    options: [
                        {
                            value: "B",
                            text: "I feel close to someone when we are talking or doing something together."
                        },
                        {
                            value: "E",
                            text: "I feel closer to friends and loved ones when they touch me often."
                        }
                    ]
                },
                {
                    order: 15,
                    options: [
                        {
                            value: "A",
                            text: "I like for people to compliment my achievements."
                        },
                        {
                            value: "D",
                            text: "I know people love me when they do things for me that they don't enjoy doing."
                        }
                    ]
                },
                {
                    order: 16,
                    options: [
                        {
                            value: "E",
                            text: "I like to be touched as friends and loves ones walk by."
                        },
                        {
                            value: "B",
                            text: "I like it when people listen to me and show genuine interest in what I am saying."
                        }
                    ]
                },
                {
                    order: 17,
                    options: [
                        {
                            value: "D",
                            text: "I feel loved when friends and loved ones help me with jobs or projects."
                        },
                        {
                            value: "C",
                            text: "I really enjoy receiving gifts from friends and loved ones."
                        }
                    ]
                },
                {
                    order: 18,
                    options: [
                        {
                            value: "A",
                            text: "I like for people to compliment my appearance."
                        },
                        {
                            value: "B",
                            text: "I feel loved when people take time to understand my feelings."
                        }
                    ]
                },
                {
                    order: 19,
                    options: [
                        {
                            value: "E",
                            text: "I feel secure when a special person is touching me."
                        },
                        {
                            value: "D",
                            text: "Acts of service make me feel loved."
                        }
                    ]
                },
                {
                    order: 20,
                    options: [
                        {
                            value: "D",
                            text: "I appreciate the many things that special people do for me."
                        },
                        {
                            value: "C", text: "I like receiving gifts that special people make for me."
                        }
                    ]
                },
                {
                    order: 21,
                    options: [
                        {
                            value: "B",
                            text: "I really enjoy the feeling I get when someone gives me undivided attention."
                        },
                        {
                            value: "D",
                            text: "I really enjoy the feeling I get when someone helps me make decisions."
                        }
                    ]
                },
                {
                    order: 22,
                    options: [
                        {
                            value: "C",
                            text: "I feel loved when a person celebrates my birthday with a gift."
                        },
                        {
                            value: "A",
                            text: "I feel loved when a person celebrates my birthday with meaningful words."
                        }
                    ]
                },
                {
                    order: 23,
                    options: [
                        {
                            value: "C",
                            text: "I know a person is thinking of me when he or she gives me a gift."
                        },
                        {
                            value: "D",
                            text: "I feel loved when a person helps with my chores."
                        }
                    ]
                },
                {
                    order: 24,
                    options: [
                        {
                            value: "B",
                            text: "I appreciate it when someone listens patiently and doesn't interrupt me."
                        },
                        {
                            value: "C",
                            text: "I appreciate it when someone remembers special days with a gift."
                        }
                    ]
                },
                {
                    order: 25,
                    options: [
                        {
                            value: "D",
                            text: "I like knowing loved ones are concern enough to help with my daily tasks."
                        },
                        {
                            value: "B",
                            text: "I enjoy extended trips with someone who is special to me."
                        }
                    ]
                },
                {
                    order: 26,
                    options: [
                        {
                            value: "E",
                            text: "I enjoy kissing or being kissed by people with whom I am close."
                        },
                        {
                            value: "C",
                            text: "I enjoy receiving a gift given for no special reason."
                        }
                    ]
                },
                {
                    order: 27,
                    options: [
                        {
                            value: "A",
                            text: "I like to be told that I am appreciated."
                        },
                        {
                            value: "B",
                            text: "I like for a person to look at me when we are talking."
                        }
                    ]
                },
                {
                    order: 28,
                    options: [
                        {
                            value: "C",
                            text: "Gifts from a friend or loved one are always special to me."
                        },
                        {
                            value: "E",
                            text: "I feel good when a friend or loved one touches me."
                        }
                    ]
                },
                {
                    order: 29,
                    options: [
                        {
                            value: "D",
                            text: "I feel loved when a person enthusiastically does some task I have requested."
                        },
                        {
                            value: "A",
                            text: "I feel loved when I am told how much I am needed."
                        }
                    ]
                },
                {
                    order: 30,
                    options: [
                        {
                            value: "E",
                            text: "I need to be touched every day."
                        },
                        {
                            value: "A",
                            text: "I need words of encouragement daily."
                        }
                    ]
                }
            ]
        },
        background_info: {
            text: "<p>Gary Chapman(1938) is a pastor and author of the mega-selling phenomenon “The 5 Love Languages® series”, which has sold more than 10 million worldwide and has been translated into 50 languages. Dr. Chapman travels the world presenting seminars on marriage, family, and relationships, and his radio programs air on more than 400 stations. He lives in North Carolina with his wife, Karolyn and they have two adult children.</p>"
        },

        amazon_products: [
            {
                title: "Love Languages Secret that Lasts",
                url: "https://www.amazon.com/Love-Languages-Secret-that-Lasts/dp/080241270X/ref=sr_1_17?ie=UTF8&qid=1467363039&sr=8-17&keywords=gottman"
            },
            {
                title: "Couples Guide Communication John Gottman",
                url: "https://www.amazon.com/Couples-Guide-Communication-John-Gottman/dp/0878221271/ref=sr_1_15?ie=UTF8&qid=1467362511&sr=8-15&keywords=gottman"
            },
            {
                title: "Love Languages Men Making Relationship",
                url: "https://www.amazon.com/Love-Languages-Men-Making-Relationship/dp/0802412726/ref=sr_1_3?ie=UTF8&qid=1474978528&sr=8-3&keywords=5+love+languages"
            }
        ]
    },


    {
        day: 3,
        title: "Active listening",

        goal: "<p>Relationships are all about communication. Sometimes it happens that we listen to our partners speaking without really hearing what they are saying. This means we miss opportunities to connect with our partners – and even worse – risk making them feel neglected, disrespected, and resentful. In order to avoid this, the two of you are going to experiment with active listening.</p><p>This exercise helps you both express active interest in what your partner has to say and to make him or her feel heard so as to foster empathy and connection. Active listening creates a safe space in which one's thoughts and feelings do not come under judgment. This is crucial in a relationship, as you want to be able to talk freely and openly to each other.</p>",

        how_to: {
            text: "<p>Find a quiet place where you can talk with your partner without interruption or distraction. Invite them to share what’s on their mind. When they do so, try to follow the steps below. You don’t need to cover every step, but the more you do cover, the more effective this exercise is likely to be.</p><ul><li>1. Sit facing each other</li><li>2. Set a timer for 5 minutes</li><li>3. Just talk about whatever they need to talk about: what’s been on their mind lately, how they feel about the other one …whatever they want.</li><li>4. Use engaged body language. Show that you are interested by maintaining eye contact, and try to maintain eye contact with them the entire time.</li><li>5. Express empathy. If the other person voices negative feelings, strive to validate these feelings rather than questioning or defending against them. For example, if the speaker expresses frustration, try to consider why he or she feels that way, regardless of whether you think that feeling is justified or whether you would feel that way yourself were you in his or her position.</li><li>6. Avoid judgment. Your goal is to understand the other person’s perspective and accept it for what it is, even if you disagree with it. Try not to interrupt with counter-arguments or mentally prepare a rebuttal while the other person is speaking.</li><li>7.Avoid giving advice. Problem-solving is likely to be more effective once you understand your partner’s perspective and when they feel heard. Moving too quickly into advice-giving can be counterproductive. </li></ul><p>Finish?</p><p>Take turns so once the timer has gone off, the roles switch and the other partner has their turn to speak in an uninterrupted stream of consciousness. </p>"
        },
        // noop = no answer just exercise
        type: "noop",
        background_info: {
            text: "<p>Want to know more about active listening? Please have a look at the below articles that we have selected for you.<p>",
            articles: [
                {
                    url: "http://www.wsj.com/articles/how-active-listening-makes-both-sides-of-a-conversation-feel-better-1421082684"
                },
                {
                    url: "https://www.psychologytoday.com/blog/fulfillment-any-age/201203/11-ways-active-listening-can-help-your-relationships"
                }
            ]
        },

        amazon_products: [
            {
                title: "Just Listen Discover Getting Absolutely",
                url: "https://www.amazon.com/Just-Listen-Discover-Getting-Absolutely/dp/0814436471/ref=sr_1_1?ie=UTF8&qid=1474978965&sr=8-1&keywords=active+listening"
            },
            {
                title: "Couples Guide Communication John Gottman",
                url: "https://www.amazon.com/Couples-Guide-Communication-John-Gottman/dp/0878221271/ref=sr_1_15?ie=UTF8&qid=1467362511&sr=8-15&keywords=gottman"
            },
            {
                title: "Lost Art Listening Second Relationships",
                url: "https://www.amazon.com/Lost-Art-Listening-Second-Relationships/dp/1593859864/ref=sr_1_4?ie=UTF8&qid=1474978965&sr=8-4&keywords=active+listening"
            }
        ]
    },


    {
        day: 4,
        title: "Let's talk about sex",

        goal: "<p>In the early seventies, it was believed that only men had sexual fantasies. We nowadays know better and having sexual fantasies, whether you want to act them out or not, is completely natural and healthy. A 2001 study in the Journal of Sex Research found that 98% of men and 80% of women had fantasized about someone other than their partner in the previous 2 months! However, how to talk to your partner about sex can be one of the more challenging aspects of a relationship.</p><p>Without being able to truly communicate about sex there is a danger that people engage in sexual activities they don’t really enjoy. Sexual satisfaction depends on your ability to express what arouses or interests you and what doesn’t.</p><p>Often people feel embarrassed about expressing their desires for fear of what their partners will think or how they’ll respond</p>",

        how_to: {
            text: "<p>How do you talk with each other about sex?</p><p>Here are some pointers to get you started:</p><ul><li><p>1. Make sure that you and your partner are ready to discuss this topic.</p><p>Timing can make a huge difference in how and where a sexual conversation goes. Pick a time when you have some privacy and are not rushed, so you can both think about what’s being said and how it feels before you respond. Great if that can happen today, but its absolutely fine if you decide together to do this exercise another day.</li><li><p>2. Agree on confidentiality.</p><p>Whenever you bring up a new sexual conversation with your partner, you are exposing a part of yourself and you need to feel safe.</p></li><li>3. You can start by asking each other questions about where you most like to be touched, what you liked best the last time you made love, what is your favourite place to kiss your partner’s body, what makes sex more exciting for you, do you have a fantasy you would like to share, is there a special love toy you’d like to try and what about watching erotic movies together?</li></ul><p>Try what works for you. Things that are new can feel uncomfortable or awkward at first, and having a sense of humour can help. There is no right or wrong, just have fun with discovering your sexual communication and see what happens. It's a nice idea to end your conversation sharing at least one positive thing that came out of it.<p></p>You can record it and send it to your partner at a moment you want to surprise him or her with a sex date.</p>"
        },
        // noop = no answer just exercise
        type: "noop",
        background_info: {
            text: "<p>Visit the link for a TedX-talk by Ester Perel, who talks about erotic intelligence and explains why fantasy is important for human relationships.</p>",
            articles: [
                {
                    url: "https://www.ted.com/talks/esther_perel_the_secret_to_desire_in_a_long_term_relationship?language=nl"
                }
            ]
        },

        amazon_products: [
            {
                title: "Mating Captivity Unlocking Erotic Intelligence",
                url: "https://www.amazon.com/Mating-Captivity-Unlocking-Erotic-Intelligence/dp/0060753641/ref=sr_1_1?ie=UTF8&qid=1468338782&sr=8-1&keywords=esther+perel"
            },
            {
                title: "Reflected You Crossfire - Sylvia Day",
                url: "https://www.amazon.com/Reflected-You-Crossfire-Sylvia-Day-ebook/dp/B008GVD6D8/ref=sr_1_3?ie=UTF8&qid=1468483383&sr=8-3&keywords=bared+to+you"
            },
            {
                title: "Art Everyday Ecstasy - Margot Anand",
                url: "https://www.amazon.com/Art-Everyday-Ecstasy-Margot-Anand/dp/0767901991/ref=sr_1_1?s=books&ie=UTF8&qid=1468651164&sr=1-1&keywords=margot+anand"
            }
        ]
    },


    {
        day: 5,
        title: "Expressing gratitude",

        goal: "<p>Expressing gratitude improves our physical and mental health as well as our relationships.</p><p>Praise each other and show your appreciation for each other by writing the other one a letter.</p>",

        how_to: {
            text: "<p><ul><li>1. Set a timer for 15 minutes</li><li>2. Take a piece of paper and write a letter expressing the gratitude you feel for the other.<br>Try using the following as a guide:<br>Address your partner directly, “Dear ______”. Don’t worry about perfect grammar or spelling. Describe in specific terms something your partner does or has done, why you are grateful for that, and how his/her behavior affected your life.<br>Try to use a concrete example. Describe what you are doing in your life now and how you often remember his or her efforts. Try to keep your letter to roughly one page (~300 words). If you find it difficult, you can start writing a list of things you really like about your partner. You could start by praising some aspect of your partner’s character, then their accomplishments, or anything else that comes to mind. There are no restrictions on what you are or are not allowed to write. Everything is ok.</li><li>3. If you don’t manage to finish the letter today, finish it another time.<br>Make sure you agree on a special moment when you will give each other the letters.</li></p>"
        },
        // noop = no answer just exercise
        type: "single-picture",

        amazon_products: [
            {
                title: "Seven Principles Making Marriage Work",
                url: "https://www.amazon.com/Seven-Principles-Making-Marriage-Work/dp/0553447718/ref=sr_1_1?ie=UTF8&qid=1467362511&sr=8-1&keywords=gottman"
            },
            {
                title: "Hold Me Tight Conversations Lifetime",
                url: "https://www.amazon.com/Hold-Me-Tight-Conversations-Lifetime/dp/031611300X/ref=sr_1_21?ie=UTF8&qid=1467363080&sr=8-21&keywords=gottman"
            },
            {
                title: "Couple Skills Making Your Relationship",
                url: "https://www.amazon.com/Couple-Skills-Making-Your-Relationship/dp/157224481X/ref=sr_1_9?ie=UTF8&qid=1468485741&sr=8-9&keywords=relationship+communication"
            }
        ]
    },


    {
        day: 6,
        title: "Back to Back, Heart to Heart Meditation",

        goal: "<p>An invitation from Josh Wise to join The Back to Back, Heart to Heart meditation. This meditation is an excellent way to extend love to someone you care for very deeply.</p>",

        how_to: {
            text: "<p>Play the video below.</p>"
        },
        // noop = no answer just exercise
        type: "noop",

        background_info: {
            text: "<p>Josh Wise, a leading authority on mindfulness and relationships. Josh teaches couples from around the world how to slow down and connect with each other in ways that go beyond words. Josh lives in Bali with his wife, Lindsey and their three children. Josh and Lindsey offer Mindful Couples retreats and workshops, to help couples cultivate a deeper connection. <a href='https://www.wisemindbody.com/'>Wise Mind Body</a></p>"
        },
        amazon_products: [
            {
                title: "Mindfulness Practical Finding Williams Paperback",
                url: "https://www.amazon.com/Mindfulness-Practical-Finding-Williams-Paperback/dp/B0157HTWS6/ref=sr_1_1?ie=UTF8&qid=1468484136&sr=8-1&keywords=Mindfulness%3A+A+Practical+Guide+to+Finding+Peace+in+a+Frantic+World"
            },
            {
                title: "Spotlight Six Software LLC Insight",
                url: "https://www.amazon.com/Spotlight-Six-Software-LLC-Insight/dp/B006HL9G10/ref=sr_1_2?s=mobile-apps&ie=UTF8&qid=1468486425&sr=1-2&keywords=insight+timer"
            },
            {
                title: "Get Some Headspace Difference Paperback",
                url: "https://www.amazon.com/Get-Some-Headspace-Difference-Paperback/dp/B00FFBZ1GW/ref=sr_1_4?ie=UTF8&qid=1468484566&sr=8-4&keywords=get+some+headspace"
            }
        ]
    },


    {
        day: 7,
        title: "Feeling connected",

        goal: "<p>Connection is key to developing the degree of intimacy any relationship needs to survive and blossom.</p><p>To help foster that feeling of connection, think about a time when you felt a strong connection with your partner and to describe that experience in writing.</p>",

        how_to: {
            text: "<p><ul><li></li>1. Try to think of a time when you felt an especially strong bond with your partner. Choose a specific example: an experience you had with your partner where you felt especially close and connected to him or her. This could be a time you had a meaningful conversation, gave or received support, experienced a great loss, succeeded at something, or witnessed a historic moment together.</li><li>2. spend a few minutes writing about that specific example. In particular, consider the ways in which this experience made you feel close and connected to your partner.</li><li>3. Share your moments with each other. If you feel like it, read out load to each other what you’ve written and then maybe talk about your chosen moments</li></ul></p>"
        },
        // noop = no answer just exercise
        type: "noop",

        amazon_products: [
            {
                title: "Seven Principles Making Marriage Work",
                url: "https://www.amazon.com/Seven-Principles-Making-Marriage-Work/dp/0553447718/ref=sr_1_1?ie=UTF8&qid=1467362511&sr=8-1&keywords=gottman"
            },
            {
                title: "Hold Me Tight Conversations Lifetime",
                url: "https://www.amazon.com/Hold-Me-Tight-Conversations-Lifetime/dp/031611300X/ref=sr_1_21?ie=UTF8&qid=1467363080&sr=8-21&keywords=gottman"
            },
            {
                title: "Couple Skills Making Your Relationship",
                url: "https://www.amazon.com/Couple-Skills-Making-Your-Relationship/dp/157224481X/ref=sr_1_9?ie=UTF8&qid=1468485741&sr=8-9&keywords=relationship+communication"
            }
        ]
    },


    {
        day: 8,
        title: "Spoiling session",

        goal: "<p>Connect by indulging in a sensual spoiling session. A spoiling session is an exercise that allows you to gain a deeper understanding of your own sexual needs and the sexual needs of your partner, while simultaneously reconnecting you as a couple and melting away the subtle shame and resistance that each partner may or may not have towards sex in general. Free of any expectations.</p>",

        how_to: {
            text: "<p><ul><li>1. Decide which partner will be first and also decide the amount of time you will share together. On day 12 there is another ‘sensual spoiling session’ when the other partner will enjoy the experience of being sensually spoiled for the same amount of time.</li><li>2. Role play. The partner who goes first is Lover A, and the other partner is Lover B. Lover A guides Lover B, expressing his/her desires and fantasies. Lover B will be the listener.</li><li>3. Preparations Lover A: put together your intimate sensual spoiling box: The ideal size is probably a shoe box, or something a little smaller.  Fill this spoiling box with inventive toys such as feathers, flowers, straws, shells, crystals, leaves, sticks, necklaces, brushes, musical instruments such bells/ tingshas /a singing bowl, maybe food like grapes, strawberries, peanut butter, chocolate spread, or massage oils/ fragrances, ice cubes. Go for things you can imagine your lover using to tickle, kiss, squeeze, scratch, wipe, push, drip, blow, stroke, slap, sprinkle, rub and tap all over your body.</li></ul></p><p><strong>Lover A.</strong></p><p>You are vulnerable, You are strong, You guide your lover. You initiate how, where and with what your lover can touch you. You can choose to start with a slow gentle full body massage or maybe a strong shoulder massage. You are in charge; you take the decisions. You could invite your lover to use their hand(s), finger(s), toe(s), elbow(s), nose, mouth, tongue, belly, bump and/or any of the extras from your intimate spoiling box. Lover A is welcoming the inner creativity of being the master, of sharing their inner sensuality and is active in exploring playfulness and boundaries.</p><p><strong>Lover B.</strong></p><p>You are the listener. The non-judgmental listener. You are vulnerable: by being curious and friendly.  You are strong: by being passive. You are open to all the sensual invitations from Lover A. <p><strong>IMPORTANTFOR BOTH LOVERS</strong>: Be present!  Surrender to the moment; be in the moment.  Both of you are patient and respectful, practice a non-judgmental awareness. Be aware of each others do’s and don’ts, the yes or the no.</p>"
        },
        // noop = no answer just exercise
        type: "noop",

        background_info: {
            text: "<p>Shira van Spanje is the founder of Frameless Feminine.  She lives and works in Bali with her family.  Frameless Feminine facilitates nurturing ‘Silence retreats’ for both men and women on Bali and in various cities around the world. They also facilitate private sessions for couples, lovers and individuals.  Shira is passionate about intensifying our daily comfort,  pleasure and inner wisdom in order to minimise daily stress.</p>"
        },

        amazon_products: [
            {
                title: "Secret VII 368281 Adult Game",
                url: "https://www.amazon.com/Secret-VII-368281-Adult-Game/dp/B005DNHQ2O/ref=sr_1_6_s_it?s=hpc&ie=UTF8&qid=1468482714&sr=1-6&keywords=sex+games"
            },
            {
                title: "Art Everyday Ecstasy Margot Anand",
                url: "https://www.amazon.com/Art-Everyday-Ecstasy-Margot-Anand/dp/0767901991/ref=sr_1_1?s=books&ie=UTF8&qid=1468651164&sr=1-1&keywords=margot+anand"
            },
            {
                title: "Art Sexual Magic Margot Anand",
                url: "https://www.amazon.com/Art-Sexual-Magic-Margot-Anand/dp/0874778409/ref=sr_1_4?s=books&ie=UTF8&qid=1468651337&sr=1-4&keywords=margot+anand"
            }
        ]
    },


    {
        day: 9,
        title: "Compassion & Loving Kindness",

        goal: "<p>An invitation from Desmond M Koh to join The Compassion & Loving Kindness exercise.</p><p>When couples take on a different approach to relationships, where partners practice the attitude of loving kindness and compassion for their partner in relationships, putting the happiness of their partner before self, relationships blossom.</p>",

        how_to: {
            text: "<p>Click the audio below</p>",
            audio: {
                file: "",
                thumbnail: ""
            }
        },
        // noop = no answer just exercise
        type: "single-audio",

        background_info: {
            text: "<p>Desmond M Koh is the founder of Compassion Capital and The Compassion Group. He lives with his family in Bali and Singapore. Together with his wife, Desmond founded a Buddhist study group on Bali. Their philosophy is that putting others before oneself leads to stronger relationships.</p>"
        }
    },


    {
        day: 10,
        title: "Non-Violent Communication (NVC)",

        goal: "<p>According to Marshall Rosenberg, conflicts often arise because we do not understand each other’s needs. Do you know the needs of your partner? If you and your partner use the language of compassion it could help to shift this aspect of your relationship.</p>",

        how_to: {
            text: "<p><p>Think of a moment when you were really annoyed with your partner.</p><p>Use the form set out below the exercise to write it down, or just give your partner an example by following 4 steps:</p><p>observation, feelings, need and request.</p><p><strong>OBSERVATION</strong>: Describe what happened at the moment you were annoyed. Use words like ‘ what I see, notice, hear, observe, etc</p><p>For example: What I observe is that you are on your phone the whole time when I am talking to you.</p><p><strong>FEELINGS</strong>: Describe how you felt about it?</p><p>For example: I felt neglected.</p><p><strong>NEEDS</strong>: Tell your partner what your needs are in this particular case.</p><p>For example: I want to be heard.</p><p><strong>REQUEST</strong>: what is it that you want from him or her and ask this.</p><p>For example: Can you please put the phone aside when we have a conversation?</p><p>Summarize what it is you want to say to your partner without judging him or her. In our example this could go something like, “When I see you busy with your phone whilst I’m telling you a story, I feel neglected, I want to be heard. Are you willing to put the phone aside whilst we have a conversation?”</p><p>Over the coming days you can experience what happens when you try addressing your partner using the language of compassion.</p><p>When your partner says something to you that you didn’t like hearing, try to also follow the four steps.</p></p>"
        },
        // noop = no answer just exercise
        type: "noop",

        background_info: {
            text: "<p>Marshall B. Rosenberg, Ph.D. (1934-2015) is an American psychologist who developed in the 1960’s the Nonviolent Communication, also described as a language of compassion, a tool for social change. He founded and was for many years the Director of Educational Services for the Center for Nonviolent Communication, an international peacemaking organization. His bestselling book Nonviolent Communication: A Language of Life has sold more than one million copies worldwide and has been translated into more than 30 languages. <a href='https://www.youtube.com/watch?v=-4EDhdAHrOg'>Play Video</a></p>"
        }
    }
];


/*


 {
 day: 17,
 title: "Question title",
 subtitle: "Question subtitle",
 type: "true-false",
 data: [
 {
 order: 1,
 question: "I can get my partner’s attention easily.",
 answers: {
 me: true,
 partner: false
 }
 },
 {
 order: 2,
 question: "My partner is easy to connect with emotionally.",
 answers: {
 me: true,
 partner: true
 }
 },
 {
 order: 3,
 question: "My partner shows me that I come first with him/her.",
 answers: {
 me: false,
 partner: true
 }
 },
 {
 order: 4,
 question: "I am not feeling lonely or shut out in this relationship.",
 answers: {
 me: false,
 partner: false
 }
 }
 ]
 },


 {
 day: 18,
 title: "Question title",
 subtitle: "Question subtitle",
 type: "ordering-items",
 data: [
 {
 title: "Engage in outdoor activities",
 order: null
 },
 {
 title: "Break up conversations",
 order: null
 },
 {
 title: "Engage in outdoor activities",
 order: null
 },
 {
 title: "Break up conversations",
 order: null
 },
 {
 title: "Engage in outdoor activities",
 order: null
 },
 {
 title: "Break up conversations",
 order: null
 },
 {
 title: "Engage in outdoor activities",
 order: null
 },
 {
 title: "Break up conversations",
 order: null
 }
 ]
 }
 ];
 */
