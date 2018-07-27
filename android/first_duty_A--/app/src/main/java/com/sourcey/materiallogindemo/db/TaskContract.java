package com.sourcey.materiallogindemo.db;

import android.provider.BaseColumns;

public class TaskContract {
    public static final String DB_NAME = "com.sourcey.materiallogindemo.db";
    public static final int DB_VERSION = 1;

    public class TaskEntry implements BaseColumns {
        public static final String PROFILE_TABLE = "profile";

        public static final String COL_NAME_TITLE = "username";
        public static final String COL_IMG_TITLE = "userimg";



        public static final String POST_TABLE = "post";

        public static final String COL_USERNAME_TITLE = "postername";
        public static final String COL_POSTIMG_TITLE = "posterimg";
        public static final String COL_POSTDES_TITLE = "description";
        public static final String COL_POSTLIKES_TITLE = "likes";
        public static final String COL_POSTDATE_TITLE = "date";
    }
}
