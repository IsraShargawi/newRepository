package com.sourcey.materiallogindemo.db;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

import java.sql.Date;

import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.POST_TABLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_USERNAME_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_POSTIMG_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_POSTDES_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_POSTLIKES_TITLE;
import static com.sourcey.materiallogindemo.db.TaskContract.TaskEntry.COL_POSTDATE_TITLE;


public class PostDbHelper extends SQLiteOpenHelper {
    public PostDbHelper(Context context) {
        super(context, TaskContract.DB_NAME, null, TaskContract.DB_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        String createTable = "CREATE TABLE " + POST_TABLE + " ( " +
                TaskContract.TaskEntry._ID + " INTEGER PRIMARY KEY AUTOINCREMENT, " +
                COL_USERNAME_TITLE + " TEXT, " +
                COL_POSTIMG_TITLE + " TEXT, " +
                COL_POSTDES_TITLE + " TEXT, " +
                COL_POSTLIKES_TITLE + " TEXT, " +
                COL_POSTDATE_TITLE + " TEXT NOT NULL);";

        db.execSQL(createTable);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS " + POST_TABLE);
        onCreate(db);
    }
    public boolean insertPost(String postDesc , String username, String img, Date date,int likes) {
        SQLiteDatabase db = getWritableDatabase();
        ContentValues contentValues = new ContentValues();
        contentValues.put(COL_USERNAME_TITLE, postDesc);
        contentValues.put(COL_POSTIMG_TITLE, username);
        contentValues.put(COL_POSTDES_TITLE, img);
        contentValues.put(COL_POSTLIKES_TITLE, date.toString());
        contentValues.put(COL_POSTDATE_TITLE, likes);

        db.insert(POST_TABLE, null, contentValues);
        return true;
    }

    public Cursor getAllPost() {
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor res = db.rawQuery( "SELECT * FROM " + POST_TABLE, null );
        return res;
    }

}
